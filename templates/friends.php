<?php include("./../generator/setings.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("./../generator/head-info.php");?>
	<script src='https://meet.jit.si/external_api.js'></script>
	<style>
		.lef{
			margin-top:4%;
			margin-left:-20%;
			width:25%;
		}
		.rig{
			margin-top:4%;
			margin-right:-20%;
			width:110%;
		}
	</style>
</head>

<body>

<?php include("./../generator/header.php");?>
<div id="parallax">
<div class="container" id="main-content">

	<div class="right-side lef">
		
		Znajomi:<br>
		<hr>

		Contact 1
		<hr>
		Contact 2
		<hr>

		<br><br>
		Zaproszenia: <br>
		<hr>

	</div>
	<div class="right-side rig" id="rig_vid">
		
		<br><h4> ZNAJOMI </h4><br>
  <!-- <div id="jitsi-container"></div> -->
  


<!-- minified snippet to load TalkJS without delaying your page -->
<script>
(function(t,a,l,k,j,s){
s=a.createElement('script');s.async=1;s.src="https://cdn.talkjs.com/talk.js";a.head.appendChild(s)
;k=t.Promise;t.Talk={v:3,ready:{then:function(f){if(k)return new k(function(r,e){l.push([f,r,e])});l
.push([f])},catch:function(){return k&&new k()},c:l}};})(window,document,[]);
</script>

<!-- container element in which TalkJS will display a chat UI -->
<div id="talkjs-container" style="width: 90%; margin: 30px; height: 500px">
  <i>Loading chat...</i>
</div>

<script>
	await Talk.ready;
	const me = new Talk.User({
	id: '123456',
	name: 'Alice',
	email: 'alice@example.com',
	photoUrl: 'https://talkjs.com/images/avatar-1.jpg',
	welcomeMessage: 'Hey there! How are you? :-)',
	});
	const session = new Talk.Session({
	appId: 'tELwQNCb',
	me: me,
	});
	const other = new Talk.User({
	id: '654321',
	name: 'Sebastian',
	email: 'Sebastian@example.com',
	photoUrl: 'https://talkjs.com/images/avatar-5.jpg',
	welcomeMessage: 'Hey, how can I help?',
	});

	const conversation = session.getOrCreateConversation(
	Talk.oneOnOneId(me, other)
	);
	conversation.setParticipant(me);
	conversation.setParticipant(other);

	const inbox = session.createInbox();
	inbox.select(conversation);
	inbox.mount(document.getElementById('talkjs-container'));
</script>

<script>
const other = new Talk.User({
  id: '654321',
  name: 'Sebastian',
  email: 'Sebastian@example.com',
  photoUrl: 'https://talkjs.com/images/avatar-5.jpg',
  welcomeMessage: 'Hey, how can I help?',
  role: 'default',
});
<?php $user = $database.getUser(654321); ?>
var other = new Talk.User(
    <?php echo json_encode(array(
        "id" => strval($user->id),
        "name" => $user->name,
        "email" => $user->email,
        "photoUrl" => $user->photoUrl,
        "welcomeMessage" => "Hey, let's have a chat!",
        "role" => "default"
    )); ?>
);

</script>

























  

		<p>
			<button id="start" class="glow-on-hover btn-down" type="button">Zaczynajmy</button>
		</p>


	</div>

</div>
</div>

<script>
		var button = document.querySelector('#start');
		var container = document.querySelector('#jitsi-container');
		var api = null;

		button.addEventListener('click', () => {
			var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
			var stringLength = 30;
			button.style.display = "none";
			

			function pickRandom() {
				return possible[Math.floor(Math.random() * possible.length)];
			}
			
			var randomString = Array.apply(null, Array(stringLength)).map(pickRandom).join('');

			var roomname = "Wartości z PHP id_usera";

			var domain = "meet.jit.si";
			var options = {
				"roomName": roomname,	//randomString,
				"parentNode": container,
				"width": 600,
				"height": 600,
			};
			api = new JitsiMeetExternalAPI(domain, options);
			
			document.getElementsByClassName('jss14')[0].style.visibility = 'hidden';
			
			var end_call = document.getElementsByClassName('hangup-button')[0];
		});

		

	</script>
<script src="../js/index.js"></script>
<?php include("../generator/footer.php");?>
</body>
</html>