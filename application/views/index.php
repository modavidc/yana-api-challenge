<!doctype html>
<html>

<head>
	<title>Yana API 1.0.0</title>
	<style type="text/css">
		body {
			font-family: Trebuchet MS, sans-serif;
			font-size: 15px;
			color: #444;
			margin-right: 24px;
		}

		h1 {
			font-size: 25px;
		}

		h2 {
			font-size: 20px;
		}

		h3 {
			font-size: 16px;
			font-weight: bold;
		}

		hr {
			height: 1px;
			border: 0;
			color: #ddd;
			background-color: #ddd;
		}

		.app-desc {
			clear: both;
			margin-left: 20px;
		}

		.param-name {
			width: 100%;
		}

		.license-info {
			margin-left: 20px;
		}

		.license-url {
			margin-left: 20px;
		}

		.model {
			margin: 0 0 0px 20px;
		}

		.method {
			margin-left: 20px;
		}

		.method-notes {
			margin: 10px 0 20px 0;
			font-size: 90%;
			color: #555;
		}

		pre {
			padding: 10px;
			margin-bottom: 2px;
		}

		.http-method {
			text-transform: uppercase;
		}

		pre.get {
			background-color: #0f6ab4;
		}

		pre.post {
			background-color: #10a54a;
		}

		pre.put {
			background-color: #c5862b;
		}

		pre.delete {
			background-color: #a41e22;
		}

		.huge {
			color: #fff;
		}

		pre.example {
			background-color: #f3f3f3;
			padding: 10px;
			border: 1px solid #ddd;
		}

		code {
			white-space: pre;
		}

		.nickname {
			font-weight: bold;
		}

		.method-path {
			font-size: 1.5em;
			background-color: #0f6ab4;
		}

		.up {
			float: right;
		}

		.parameter {
			width: 500px;
		}

		.param {
			width: 500px;
			padding: 10px 0 0 20px;
			font-weight: bold;
		}

		.param-desc {
			width: 700px;
			padding: 0 0 0 20px;
			color: #777;
		}

		.param-type {
			font-style: italic;
		}

		.param-enum-header {
			width: 700px;
			padding: 0 0 0 60px;
			color: #777;
			font-weight: bold;
		}

		.param-enum {
			width: 700px;
			padding: 0 0 0 80px;
			color: #777;
			font-style: italic;
		}

		.field-label {
			padding: 0;
			margin: 0;
			clear: both;
		}

		.field-items {
			padding: 0 0 15px 0;
			margin-bottom: 15px;
		}

		.return-type {
			clear: both;
			padding-bottom: 10px;
		}

		.param-header {
			font-weight: bold;
		}

		.method-tags {
			text-align: right;
		}

		.method-tag {
			background: none repeat scroll 0% 0% #24A600;
			border-radius: 3px;
			padding: 2px 10px;
			margin: 2px;
			color: #FFF;
			display: inline-block;
			text-decoration: none;
		}
	</style>
</head>

<body>
	<h1>Yana API 1.0.0</h1>
	<div class="app-desc">
		<p>La API de Yana permite hacer inicio de sesión, crear usuarios y consultar el historial de conversaciones de los usuarios.</p>
		<p>Algunos enlaces útiles:</p>
		<ul>
			<li><a href="https://github.com/modavidc/yana-challenge">Repositorio de Github</a></li>
		</ul>
	</div>
	<div class="app-desc">More information: <a href="https://helloreverb.com">https://helloreverb.com</a></div>
	<div class="app-desc">Contact Info: <a href="moisesdavidaaron@gmail.com">moisesdavidaaron@gmail.com</a></div>
	<div class="app-desc">Version: 1.0.11</div>
	<div class="app-desc">BasePath:/api</div>
	<div class="license-info">Apache 2.0</div>
	<div class="license-url">http://www.apache.org/licenses/LICENSE-2.0.html</div>
	<h2>Access</h2>

	<h2><a name="__Methods">Methods</a></h2>
	[ Jump to <a href="#__Models">Models</a> ]

	<h3>Table of Contents </h3>
	<div class="method-summary"></div>
	<h4><a href="#Auth">Auth</a></h4>
	<ul>
		<li><a href="#login"><code><span class="http-method">put</span> /login</code></a></li>
	</ul>
	<h4><a href="#Conversations">Conversations</a></h4>
	<ul>
		<li><a href="#getConversations"><code><span class="http-method">get</span> /conversations/{uid}</code></a></li>
	</ul>
	<h4><a href="#Users">Users</a></h4>
	<ul>
		<li><a href="#createUser"><code><span class="http-method">post</span> /users</code></a></li>
	</ul>

	<h1><a name="Auth">Auth</a></h1>
	<div class="method"><a name="login"></a>
		<div class="method-path">
			<a class="up" href="#__Methods">Up</a>
			<pre class="put"><code class="huge"><span class="http-method">put</span> /login</code></pre>
		</div>
		<div class="method-summary">Iniciar sesión. (<span class="nickname">login</span>)</div>
		<div class="method-notes">Inicia sesión como usuario con correo electrónico y contraseña.</div>


		<h3 class="field-label">Consumes</h3>
		This API call consumes the following media types via the <span class="header">Content-Type</span> request header:
		<ul>
			<li><code>application/json</code></li>
		</ul>

		<h3 class="field-label">Request body</h3>
		<div class="field-items">
			<div class="param">body <a href="#LoginOrCreateRequest">LoginOrCreateRequest</a> (required)</div>

			<div class="param-desc"><span class="param-type">Body Parameter</span> &mdash; </div>
		</div> <!-- field-items -->




		<h3 class="field-label">Return type</h3>
		<div class="return-type">
			<a href="#LoginSuccess">LoginSuccess</a>

		</div>

		<!--Todo: process Response Object and its headers, schema, examples -->

		<h3 class="field-label">Example data</h3>
		<div class="example-data-content-type">Content-Type: application/json</div>
		<pre class="example"><code>{
  "code" : 200,
  "message" : "Inicio de sesión con éxito"
}</code></pre>

		<h3 class="field-label">Produces</h3>
		This API call produces the following media types according to the <span class="header">Accept</span> request header;
		the media type will be conveyed by the <span class="header">Content-Type</span> response header.
		<ul>
			<li><code>application/json</code></li>
		</ul>

		<h3 class="field-label">Responses</h3>
		<h4 class="field-label">200</h4>
		Inicio de sesión exitoso.
		<a href="#LoginSuccess">LoginSuccess</a>
		<h4 class="field-label">401</h4>
		Credenciales incorrectas.
		<a href="#Unauthorized">Unauthorized</a>
		<h4 class="field-label">405</h4>
		Método no permitido.
		<a href="#MethodNotAllowed">MethodNotAllowed</a>
		<h4 class="field-label">422</h4>
		Campos requeridos.
		<a href="#Unprocessable">Unprocessable</a>
	</div> <!-- method -->
	<hr />
	<h1><a name="Conversations">Conversations</a></h1>
	<div class="method"><a name="getConversations"></a>
		<div class="method-path">
			<a class="up" href="#__Methods">Up</a>
			<pre class="get"><code class="huge"><span class="http-method">get</span> /conversations/{uid}</code></pre>
		</div>
		<div class="method-summary">Consultar las conversaciones de un usuario (<span class="nickname">getConversations</span>)</div>
		<div class="method-notes">Obtiener todas las conversaciones de un usuario.</div>

		<h3 class="field-label">Path parameters</h3>
		<div class="field-items">
			<div class="param">uid (required)</div>

			<div class="param-desc"><span class="param-type">Path Parameter</span> &mdash; ID del usuario que solicita la conversación format: int64</div>
		</div> <!-- field-items -->






		<h3 class="field-label">Return type</h3>
		<div class="return-type">
			array[<a href="#Conversation">Conversation</a>]

		</div>

		<!--Todo: process Response Object and its headers, schema, examples -->

		<h3 class="field-label">Example data</h3>
		<div class="example-data-content-type">Content-Type: application/json</div>
		<pre class="example"><code>[ {
  "id" : 1,
  "value" : "Mensaje 1",
  "messageFrom" : "Moisés",
  "timestamp" : "00:59"
}, {
  "id" : 1,
  "value" : "Mensaje 1",
  "messageFrom" : "Moisés",
  "timestamp" : "00:59"
} ]</code></pre>

		<h3 class="field-label">Produces</h3>
		This API call produces the following media types according to the <span class="header">Accept</span> request header;
		the media type will be conveyed by the <span class="header">Content-Type</span> response header.
		<ul>
			<li><code>application/json</code></li>
		</ul>

		<h3 class="field-label">Responses</h3>
		<h4 class="field-label">200</h4>
		Listado de las conversaciones del usuario.

		<h4 class="field-label">404</h4>
		Usuario no se encuentra.
		<a href="#NotFoundUser">NotFoundUser</a>
		<h4 class="field-label">405</h4>
		Método no permitido.
		<a href="#MethodNotAllowed">MethodNotAllowed</a>
		<h4 class="field-label">422</h4>
		Campos requeridos.
		<a href="#GetConversationsUnprocessable">GetConversationsUnprocessable</a>
	</div> <!-- method -->
	<hr />
	<h1><a name="Users">Users</a></h1>
	<div class="method"><a name="createUser"></a>
		<div class="method-path">
			<a class="up" href="#__Methods">Up</a>
			<pre class="post"><code class="huge"><span class="http-method">post</span> /users</code></pre>
		</div>
		<div class="method-summary">Crear un usuario (<span class="nickname">createUser</span>)</div>
		<div class="method-notes">Crea un nuevo usuario a partir del correo electrónico y la contraseña.</div>


		<h3 class="field-label">Consumes</h3>
		This API call consumes the following media types via the <span class="header">Content-Type</span> request header:
		<ul>
			<li><code>application/json</code></li>
		</ul>

		<h3 class="field-label">Request body</h3>
		<div class="field-items">
			<div class="param">body <a href="#LoginOrCreateRequest">LoginOrCreateRequest</a> (required)</div>

			<div class="param-desc"><span class="param-type">Body Parameter</span> &mdash; </div>
		</div> <!-- field-items -->




		<h3 class="field-label">Return type</h3>
		<div class="return-type">
			<a href="#CreateUserSuccess">CreateUserSuccess</a>

		</div>

		<!--Todo: process Response Object and its headers, schema, examples -->

		<h3 class="field-label">Example data</h3>
		<div class="example-data-content-type">Content-Type: application/json</div>
		<pre class="example"><code>{
  "code" : 201,
  "message" : "Usuario creado"
}</code></pre>

		<h3 class="field-label">Produces</h3>
		This API call produces the following media types according to the <span class="header">Accept</span> request header;
		the media type will be conveyed by the <span class="header">Content-Type</span> response header.
		<ul>
			<li><code>application/json</code></li>
		</ul>

		<h3 class="field-label">Responses</h3>
		<h4 class="field-label">201</h4>
		Usuario creado.
		<a href="#CreateUserSuccess">CreateUserSuccess</a>
		<h4 class="field-label">405</h4>
		Método no permitido.
		<a href="#MethodNotAllowed">MethodNotAllowed</a>
		<h4 class="field-label">409</h4>
		Correo electrónico duplicado.
		<a href="#CreateUserConflict">CreateUserConflict</a>
		<h4 class="field-label">422</h4>
		Campos requeridos.
		<a href="#Unprocessable">Unprocessable</a>
	</div> <!-- method -->
	<hr />

	<h2><a name="__Models">Models</a></h2>
	[ Jump to <a href="#__Methods">Methods</a> ]

	<h3>Table of Contents</h3>
	<ol>
		<li><a href="#Conversation"><code>Conversation</code></a></li>
		<li><a href="#CreateUserConflict"><code>CreateUserConflict</code></a></li>
		<li><a href="#CreateUserSuccess"><code>CreateUserSuccess</code></a></li>
		<li><a href="#GetConversationsUnprocessable"><code>GetConversationsUnprocessable</code></a></li>
		<li><a href="#LoginOrCreateRequest"><code>LoginOrCreateRequest</code></a></li>
		<li><a href="#LoginSuccess"><code>LoginSuccess</code></a></li>
		<li><a href="#MethodNotAllowed"><code>MethodNotAllowed</code></a></li>
		<li><a href="#NotFoundUser"><code>NotFoundUser</code></a></li>
		<li><a href="#Unauthorized"><code>Unauthorized</code></a></li>
		<li><a href="#Unprocessable"><code>Unprocessable</code></a></li>
	</ol>

	<div class="model">
		<h3><a name="Conversation"><code>Conversation</code></a> <a class="up" href="#__Models">Up</a></h3>

		<div class="field-items">
			<div class="param">id (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#long">Long</a></span> format: int64</div>
			<div class="param-desc"><span class="param-type">example: 1</span></div>
			<div class="param">messageFrom (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#string">String</a></span> </div>
			<div class="param-desc"><span class="param-type">example: Moisés</span></div>
			<div class="param">value (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#string">String</a></span> </div>
			<div class="param-desc"><span class="param-type">example: Mensaje 1</span></div>
			<div class="param">timestamp (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#string">String</a></span> </div>
			<div class="param-desc"><span class="param-type">example: 00:59</span></div>
		</div> <!-- field-items -->
	</div>
	<div class="model">
		<h3><a name="CreateUserConflict"><code>CreateUserConflict</code></a> <a class="up" href="#__Models">Up</a></h3>

		<div class="field-items">
			<div class="param">code (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#long">Long</a></span> format: int64</div>
			<div class="param-desc"><span class="param-type">example: 409</span></div>
			<div class="param">message (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#string">String</a></span> </div>
			<div class="param-desc"><span class="param-type">example: El correo electrónico ya se encuentra registrado</span></div>
		</div> <!-- field-items -->
	</div>
	<div class="model">
		<h3><a name="CreateUserSuccess"><code>CreateUserSuccess</code></a> <a class="up" href="#__Models">Up</a></h3>

		<div class="field-items">
			<div class="param">code (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#long">Long</a></span> format: int64</div>
			<div class="param-desc"><span class="param-type">example: 201</span></div>
			<div class="param">message (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#string">String</a></span> </div>
			<div class="param-desc"><span class="param-type">example: Usuario creado</span></div>
		</div> <!-- field-items -->
	</div>
	<div class="model">
		<h3><a name="GetConversationsUnprocessable"><code>GetConversationsUnprocessable</code></a> <a class="up" href="#__Models">Up</a></h3>

		<div class="field-items">
			<div class="param">code (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#long">Long</a></span> format: int64</div>
			<div class="param-desc"><span class="param-type">example: 422</span></div>
			<div class="param">message (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#string">String</a></span> </div>
			<div class="param-desc"><span class="param-type">example: El uid es requerido</span></div>
		</div> <!-- field-items -->
	</div>
	<div class="model">
		<h3><a name="LoginOrCreateRequest"><code>LoginOrCreateRequest</code></a> <a class="up" href="#__Models">Up</a></h3>

		<div class="field-items">
			<div class="param">name (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#string">String</a></span> </div>
			<div class="param-desc"><span class="param-type">example: moises@gmail.com</span></div>
			<div class="param">password </div>
			<div class="param-desc"><span class="param-type"><a href="#string">String</a></span> </div>
			<div class="param-desc"><span class="param-type">example: password</span></div>
		</div> <!-- field-items -->
	</div>
	<div class="model">
		<h3><a name="LoginSuccess"><code>LoginSuccess</code></a> <a class="up" href="#__Models">Up</a></h3>

		<div class="field-items">
			<div class="param">code (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#long">Long</a></span> format: int64</div>
			<div class="param-desc"><span class="param-type">example: 200</span></div>
			<div class="param">message (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#string">String</a></span> </div>
			<div class="param-desc"><span class="param-type">example: Inicio de sesión con éxito</span></div>
		</div> <!-- field-items -->
	</div>
	<div class="model">
		<h3><a name="MethodNotAllowed"><code>MethodNotAllowed</code></a> <a class="up" href="#__Models">Up</a></h3>

		<div class="field-items">
			<div class="param">status (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#boolean">Boolean</a></span> </div>
			<div class="param-desc"><span class="param-type">example: false</span></div>
			<div class="param">message (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#string">String</a></span> </div>
			<div class="param-desc"><span class="param-type">example: Unknown method</span></div>
		</div> <!-- field-items -->
	</div>
	<div class="model">
		<h3><a name="NotFoundUser"><code>NotFoundUser</code></a> <a class="up" href="#__Models">Up</a></h3>

		<div class="field-items">
			<div class="param">code (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#long">Long</a></span> format: int64</div>
			<div class="param-desc"><span class="param-type">example: 404</span></div>
			<div class="param">message (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#string">String</a></span> </div>
			<div class="param-desc"><span class="param-type">example: El usuario no se encuenta registrado</span></div>
		</div> <!-- field-items -->
	</div>
	<div class="model">
		<h3><a name="Unauthorized"><code>Unauthorized</code></a> <a class="up" href="#__Models">Up</a></h3>

		<div class="field-items">
			<div class="param">code (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#long">Long</a></span> format: int64</div>
			<div class="param-desc"><span class="param-type">example: 401</span></div>
			<div class="param">message (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#string">String</a></span> </div>
			<div class="param-desc"><span class="param-type">example: Las credenciales son incorrectas</span></div>
		</div> <!-- field-items -->
	</div>
	<div class="model">
		<h3><a name="Unprocessable"><code>Unprocessable</code></a> <a class="up" href="#__Models">Up</a></h3>

		<div class="field-items">
			<div class="param">code (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#long">Long</a></span> format: int64</div>
			<div class="param-desc"><span class="param-type">example: 422</span></div>
			<div class="param">message (optional)</div>
			<div class="param-desc"><span class="param-type"><a href="#string">String</a></span> </div>
			<div class="param-desc"><span class="param-type">example: El correo electrónico y la contraseña son requeridos</span></div>
		</div> <!-- field-items -->
	</div>
</body>

</html>