<h1 style="color: #317399; text-align: left;">Moin, liebes QRestaurant Team!</h1>
<p>Eine Nachricht kam soeben rein!</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;"><strong>{{ $name }}</strong> m&ouml;chte wissen:</p>
<p><strong>{{ $user_message }}</strong></p>
<p style="text-align: left;">&nbsp;</p>
<p>Antwort bitte an diese E-Mail Adresse:</p>
<p><strong>

        <a href="mailto:{{ $email }}?subject=Deine Anfrage an QRestaurant&body=Hallo, {{ $name }}%0D%0AVielen Dank für Deine Nachricht.%0D%0ADeine Frage:%0D%0A{{ $user_message }}%0D%0AUnsere Antwort:%0D%0A">{{ $email }}</a>
    </strong></p>
<p style="text-align: left;">&nbsp;</p>
