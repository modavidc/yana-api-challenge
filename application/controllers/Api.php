<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
    /**
     * HTTP status codes and their respective description.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status
     */
    const HTTP_UNPROCESSABLE = 422;
    const HTTP_CONFLICT = 409;

    /**
     * Constructor.
     *
     * @return void
     */
    function __construct()
    {
        parent::__construct();

        $this->load->database();

        $this->load->helper('url');
        $this->load->helper('security_helper');
        $this->load->helper('json_responses_helper');

        $this->load->model('User_model');
        $this->load->model('User_activity_model');
    }

    /**
     * Recibe las credenciales de un usuario y valida el inicio de sesión.
     *
     * @return void
     */
    public function login_post()
    {
        $params = $this->input->post();

        $this->validate_login($params);
        $this->attempt_login($params);

        response_200($this, 'Inicio de sesión con éxito');
    }

    /**
     * Valida los parámetros de la solicitud de acceso. 
     *
     * @param  array  $params
     * @return void
     */
    private function validate_login(array $params): void
    {
        if (empty($params['email']) && empty($params['password'])) {
            response_422($this, 'El correo electrónico y la contraseña son requeridos');
        }
        if (empty($params['email'])) {
            response_422($this, 'El correo electrónico es requerido');
        }
        if (empty($params['password'])) {
            response_422($this, 'La contraseña es requerida');
        }
    }

    /**
     * Intenta autenticar al usuario utilizando las credenciales dadas.
     *
     * @param  array  $credentials
     * @return void
     */
    private function attempt_login(array $credentials): void
    {
        $user_exists = $this->User_model->get_by('email', $credentials['email']);

        if (empty($user_exists)) {
            response_401($this, 'Las credenciales son incorrectas');
        }
        if (empty(compare_password($credentials['password'], $user_exists['password']))) {
            response_401($this, 'Las credenciales son incorrectas');
        }
    }

    /**
     * Create a new user account.
     *
     * @return void
     */
    public function users_post()
    {
        $params = $this->input->post();

        $this->validate_create($params);
        $this->validate_user_does_not_exists($params);

        $this->store_user($params);

        response_201($this, 'Usuario creado');
    }

    /**
     * Valida los parámetros de la solicitud antes de la creación del usuario
     *
     * @param  array  $params
     * @return void
     */
    private function validate_create(array $params): void
    {
        if (empty($params['email']) && empty($params['password'])) {
            response_422($this, 'El correo electrónico y la contraseña son requeridos');
        }
        if (empty($params['email'])) {
            response_422($this, 'El correo electrónico es requerido');
        }
        if (empty($params['password'])) {
            response_422($this, 'La contraseña es requerida');
        }
    }

    /**
     * Valida que el usuario no exista previamente en la base de datos.
     *
     * @param  array  $params
     * @return void
     */
    private function validate_user_does_not_exists(array $params): void
    {
        $user_exists = $this->User_model->get_by('email', $params['email']);

        if (isset($user_exists)) {
            response_409($this, 'El correo electrónico ya se encuentra registrado');
        }
    }

    /**
     * Almacena el usuario en la base de datos.
     *
     * @param  array  $params
     * @return void
     */
    private function store_user(array $params): void
    {
        $params['password'] = hash_password($params['password']);

        $this->User_model->create($params);
    }

    /**
     * Devuelve el historial de la conversación entre el usuario y la máquina.
     *
     * @return void
     */
    public function conversations_get()
    {
        $params = $this->input->get();

        $this->validate_get_conversations($params);
        
        $user_exists = $this->validate_user_exists($params["uid"]);

        $all_conversations = $this->get_conversations_by_uid($user_exists["id"]);
        $formatted_conversations = $this->format_conversations($all_conversations);

        response_data($this, $formatted_conversations);
    }

    /**
     * Valida los parámetros de la solicitud antes de obtener las conversaciones. 
     *
     * @param  array  $params
     * @return void
     */
    private function validate_get_conversations(array $params): void
    {
        if (array_key_exists("uid", $params) === false) {
            response_422($this, 'El uid es requerido');
        }
    }

    /**
     * Valida que el usuario existe en la base de datos.
     *
     * @param  string  $uid
     * @return array
     */
    private function validate_user_exists(string $uid): array
    {
        $user_exists = $this->User_model->get_by('id', $uid);

        if (empty($user_exists)) {
            response_404($this, 'El usuario no se encuenta registrado');
        }

        return $user_exists;
    }

    /**
     * Obtiene los datos del historial de conversacion.
     *
     * @param  array  $uid
     * @return array
     */
    private function get_conversations_by_uid(string $uid): array
    {
        return $this->User_activity_model->get_by("uid", $uid);
    }

    /**
     * Formatea las conversaciones según la norma indicada.
     *
     * @param  array $all_conversations
     * @return array
     */
    private function format_conversations(array $all_conversations): array
    {
        $conversations = array();

        foreach ($all_conversations as $conversation) {
            $conversation = (array)$conversation;

            $conversations[] = array(
                "id" => intval($conversation["id"]),
                "messageFrom" => $conversation["message_from"],
                "value" => $conversation["message_text"],
                "timestamp" => $conversation["timestamp"],
            );
        }

        return $conversations;
    }
}
