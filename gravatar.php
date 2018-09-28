<center>
<?php $email = $_POST["email"];?><br>
<img src="https://www.gravatar.com/avatar/<?php echo md5( strtolower( trim( $email) ) );?>?s=125" />
<br><br>
<?php
$str = file_get_contents( 'https://www.gravatar.com/'.md5( strtolower( trim( $email) ) ).'.php' );
$profile = unserialize( $str );
if ( is_array( $profile ) && isset( $profile['entry'] ) )
    echo "Display name : ".@$profile['entry'][0]['displayName'];
	echo "<br> Profile Url : ".@$profile['entry'][0]['profileUrl'];
	echo "<br> Preferred Username : ".@$profile['entry'][0]['preferredUsername'];
	echo "<br> Email : ".@$profile['entry'][0]['emails'][0]['value'];
	echo "<br> Given Name : ".ucwords(@$profile['entry'][0]['name']['givenName']);
	echo "<br> Family Name : ".ucwords(@$profile['entry'][0]['name']['familyName']);
	echo "<br> Formatted Name : ".ucwords(@$profile['entry'][0]['name']['formatted']);
	echo "<br> About Me : ".@$profile['entry'][0]['aboutMe'];
	echo "<br> Location : ".@$profile['entry'][0]['currentLocation'];
	echo "<br> Web 1 : ".@$profile['entry'][0]['urls'][0]['value'];
	echo "<br> Web 1 Title : ".ucwords(@$profile['entry'][0]['urls'][0]['title']);
	echo "<br> Web 2 : ".@$profile['entry'][0]['urls'][1]['value'];
	echo "<br> Web 2 Title : ".ucwords(@$profile['entry'][0]['urls'][1]['title']);
	echo "<br> Web 3 : ".@$profile['entry'][0]['urls'][2]['value'];
	echo "<br> Web 3 Title : ".ucwords(@$profile['entry'][0]['urls'][2]['title']);
?>
<br><br><form action="index.php"><input type="submit" value="Coba Lagi" /></form>