<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Chat Application</title>
	<link rel="stylesheet" type="text/css" href="{{ asset ('css/app.css')}}">
	<style>
		.list-group{
			overflow-y: scroll;
			height: 200px;
		}
	</style>

</head>
<body>
	<div id="app">
		<div class="container">
			<div class="row">
				<div class="offset-4 col-4">
					<li class="list-group-item active">Chat Room</li>
					<ul class="list-group" v-chat-scroll>
					  
					  <message v-for="value in chat.message" :key=value.index color='success'>
					  	@{{ value }}
					  </message>
					 
					</ul>
					 <input type="text"  class="form-control" name="" placeholder="Type your messsge here..." v-model='message' @keyup.enter='send'>
				</div>
				
			</div>

			

		</div>
	</div>

	<script type="text/javascript" src = "{{ asset ('js/app.js')}}"></script>
		<!-- <script>
			var app = new Vue({
				  el: '#app',
				  data: {
				    message: 'Hello Vue!'
				  }
				})


		</script> -->

</body>


</html>
