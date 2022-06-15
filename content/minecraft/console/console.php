<?php ?>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="favicon.png">

		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="/content/style/WebConsole.php">

		
		<title>WebConsole</title>
	</head>
	<body class="d-flex flex-column h-100">
		<header id="header">
			<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
				<!--<a class="navbar-brand" href="" id="navbarBrandLink">WebConsole</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContainer" aria-controls="navbarContainer" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>-->
				<div class="collapse navbar-collapse" id="navbarContainer">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="http://178.254.18.170/" id="navbarHomeLink">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://178.254.18.170/content/minecraft/console/console.html" id="serversDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Your servers
							</a>
							<div class="dropdown-menu" id="ServerListDropDown" aria-labelledby="serversDropdown">
								<a class="dropdown-item" href data-toggle="modal" data-target="#addServerModal" id="add_server">Add Server</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item servermenuitem" href="http://178.254.18.170/content/minecraft/console/console.html">Example server</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://178.254.18.170/content/minecraft/console/console.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="lang_dropdown">
								Language
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="langDropdown">
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('en_US')">English</a>
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('es_ES')">Español</a>
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('zh_CN')">中文</a>
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('ko_KR')">한국어</a>
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('cs_CZ')">Czech</a>
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('de_DE')">Deutsch</a>
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('nl_NL')">Dutch</a>
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('fr_FR')">Français</a>
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('it_IT')">Italiano</a>
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('pt_BR')">Português</a>
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('pl_PL')">Polskie</a>
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('ru_RU')">русский</a>
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('tr_TR')">Türk</a>
								<a class="dropdown-item" href="http://178.254.18.170/content/minecraft/console/console.html" onclick="setLanguage('ja_JA')">日本語</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href data-toggle="modal" data-target="#settingsModal" id="settingsLink">Settings</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		
		<!-- Begin page content -->
		<main role="main" class="flex-shrink-0">
			<!-- Welcome container 
			<div class="container" id="welcomeContainer">
				<h1 class="mt-5" id="home_header">Select a server from the menu</h1>
				<p class="lead" id="home_description">Use the navigation bar to add a new Minecraft Server or connect to a previously added one.</p>
			</div> -->
			
			<!-- Server management container -->
			<div class="container" id="serverContainer" style="display: none;">
				<h1 class="mt-4" id="serverTitle"></h1>
				
				<div class="row p-2">
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title" id="players_online">Players Online</h5>
								<p class="card-text"><span id="connectedPlayers">0</span> / <span id="maxPlayers">Unknown</span></p>
								<div class="progress flat-progressbar">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" id="playerProgressBar"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title" id="cpu_title">CPU</h5>
								<p class="card-text" id="cpuInfo">0%</p>
								<div class="progress flat-progressbar">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" id="CpuProgressBar"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title" id="ram_title">RAM</h5>
								<p class="card-text"><span id="usedRam">0</span> MB / <span id="totalRam">0</span> MB</p>
								<div class="progress flat-progressbar">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" id="RamProgressBar"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title" id="tps_title">TPS</h5>
								<p class="card-text"><span id="tps">0</span> Ticks / <span id="maxTps">0</span> Ticks</p>
								<div class="progress flat-progressbar">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" id="TpsProgressBar"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row p-2 mb-2">
					<div class="col-sm-9">
						<div class="card">
							<div class="card-body">
								<span id="user_title">Logged as</span>&nbsp;<span id="loggedUsernameLabel">Unknown</span>&nbsp;(<span id="loggedUserTypeLabel">Unknown</span>)
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card">
							<button type="button" class="btn btn-danger btn-sm" id="deleteServerButton">Delete server</button>
						</div>
					</div>
				</div>
				
				<div class="card mb-2">
					<div class="card-body overflow-auto text-light bg-dark console" id="consoleTextArea"></div>
				</div>
				<div class="input-group mb-3">
					<input type="text" class="form-control" id="commandInput">
					<div class="input-group-append">
						<button class="btn btn-secondary" type="button" id="sendCommandButton">Send</button>
					</div>
				</div>
			</div>
		</main>
		
		<!-- Add Server Modal -->
		<div class="modal fade" id="addServerModal" tabindex="-1" role="dialog" aria-labelledby="addServerModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addServerModalLongTitle">Add a new server</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="CloseAddServer">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form id="addServerForm">
							<div class="form-group">
								<label for="server-name" class="col-form-label" id="addServerModalSvName">Server name:</label>
								<input type="text" class="form-control" id="server-name" required>
							</div>
							<div class="form-group">
								<label for="server-ip" class="col-form-label" id="addServerModalSvIp">Server IP:</label>
								<input type="text" class="form-control" id="server-ip" placeholder="178.254.18.170" required>
							</div>
							<div class="form-group">
								<label for="server-port" class="col-form-label" id="addServerModalSvPort">Server port:</label>
								<input type="number" class="form-control" id="server-port" placeholder="8080" min="1" max="65535" required>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="server-ssl">
								<label class="form-check-label" for="server-ssl" id="addServerModalSvSsl">Server is SSL enabled</label>
								<div class="text-danger" id="addServerModalSslAdvice"></div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal" id="addServerModalClose">Close</button>
						<button type="button" class="btn btn-primary" id="saveAndConnectServerButton">Save and connect</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Password Modal -->
		<div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="passwordModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="passwordModalLongTitle">Password required</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form id="passwordForm">
							<div class="form-group">
								<label for="server-pwd" class="col-form-label" id="passwordModalLabel">Password:</label>
								<input type="password" class="form-control" id="server-pwd">
							</div>
							<div class="form-group">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="rememberPwdCheckbox">
									<label class="form-check-label" for="rememberPwdCheckbox" id="passwordModalRememberLabel">Remember password</label>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal" id="passwordModalCloseButton">Close</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal" id="passwordSendButton">Login</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Disconnection Modal -->
		<div class="modal fade" id="disconnectionModal" tabindex="-1" role="dialog" aria-labelledby="disconnectionModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="disconnectionModalLongTitle">Disconnected</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<span id="disconnectionModalDescription">Connection was lost with the server. This can be caused by:</span>
						<ul>
							<li id="disconnectionModalsub1">Server was closed intentionally.</li>
							<li id="disconnectionModalsub2">Port is not opened on your host. In this case, troubleshoot using <a href="https://www.yougetsignal.com/tools/open-ports/">this tool</a> and recheck your firewall or router.</li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal" id="disconnectionModalCloseButton">Close</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal" id="disconnectionModalWelcomeScreenButton">Welcome screen</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Settings Modal -->
		<div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="settingsModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="settingsModalLongTitle">WebConsole Settings</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" id="settingsModalDescription">
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="showDateSettingsSwitch">
							<label class="custom-control-label" for="showDateSettingsSwitch" id="showDateSettingsSwitchLabel">Show date and time on each console line</label>
						</div>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="readLogFileSwitch">
							<label class="custom-control-label" for="readLogFileSwitch" id="readLogFileSwitchLabel">Retrieve full log file from server after login</label>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal" id="settingsModalCloseButton">Done</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Webpage footer 
		<footer class="footer mt-auto py-3">
			<div class="container">
				<span class="text-muted">WebConsole v2.4 - <a href="https://github.com/mesacarlos/WebConsole">GitHub</a></span>
			</div>
		</footer> -->
		
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<!-- WebConsole JS Objects -->
		<script src="scripts/object/Setting.js?v=2.4.0"></script>
		<script src="scripts/object/WSServer.js?v=2.4.0"></script>

		<!-- WebConsole JS Scripts -->
		<script src="/content/minecraft/console/scripts/WebConsoleLanguage.js?v=2.4.0"></script>
		<script src="/content/minecraft/console/scripts/WebConsoleConnector.js?v=2.4.0"></script>
		<script src="/content/minecraft/console/scripts/WebConsoleManager.js?v=2.4.0"></script>
		<script src="/content/minecraft/console/scripts/WebConsolePersistenceManager.js?v=2.4.0"></script>
		<script src="/content/minecraft/console/scripts/WebConsole.js?v=2.4.0"></script>
		<script src="/content/minecraft/console/scripts/WebConsoleJqueryHandler.js?v=2.4.0"></script>
	</body>
</html>
