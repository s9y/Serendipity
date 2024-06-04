<?php

/**
 * Tests of the language parsing methods within mf2\Parser
 */

namespace Mf2\Parser\Test;

use Mf2\Parser;
use Mf2;
use PHPUnit_Framework_TestCase;

class ParseLanguageTest extends PHPUnit_Framework_TestCase {

	public function setUp() {
		date_default_timezone_set('Europe/London');
	}

	/**
	 * Test with only <html lang>
	 */
	public function testHtmlLangOnly()
	{
		$input = '<html lang="en"> <div class="h-entry">This test is in English.</div> </html>';
		$parser = new Parser($input);
		$parser->lang = true;
		$result = $parser->parse();

		$this->assertArrayHasKey('lang', $result['items'][0]);
		$this->assertEquals('en', $result['items'][0]['lang']);
	} # end method testHtmlLangOnly()

	/**
	 * Test with only h-entry lang
	 */
	public function testHEntryLangOnly()
	{
		$input = '<html> <div class="h-entry" lang="en">This test is in English.</div> </html>';
		$parser = new Parser($input);
		$parser->lang = true;
		$result = $parser->parse();

		$this->assertArrayHasKey('lang', $result['items'][0]);
		$this->assertEquals('en', $result['items'][0]['lang']);
	} # end method testHEntryLangOnly()

	/**
	 * Test with different <html lang> and h-entry lang
	 */
	public function testHtmlAndHEntryLang()
	{
		$input = '<html lang="en"> <div class="h-entry" lang="es">Esta prueba está en español.</div> </html>';
		$parser = new Parser($input);
		$parser->lang = true;
		$result = $parser->parse();

		$this->assertArrayHasKey('lang', $result['items'][0]);
		$this->assertEquals('es', $result['items'][0]['lang']);
	} # end method testHtmlAndHEntryLang()

    /**
     * Test HTML fragment with only h-entry lang
     */
    public function testFragmentHEntryLangOnly()
    {
        $input = '<div class="h-entry" lang="en">This test is in English.</div>';
        $parser = new Parser($input);
        $parser->lang = true;
        $result = $parser->parse();

        $this->assertArrayHasKey('lang', $result['items'][0]);
        $this->assertEquals('en', $result['items'][0]['lang']);
    } # end method testFragmentHEntryLangOnly()

    /**
     * Test HTML fragment with no lang
     */
    public function testFragmentHEntryNoLang()
    {
        $input = '<div class="h-entry">This test is in English.</div>';
        $parser = new Parser($input);
        $parser->lang = true;
        $result = $parser->parse();

        $this->assertArrayNotHasKey('lang', $result['items'][0]);
    } # end method testFragmentHEntryNoLang()

    /**
     * Test HTML fragment with no lang, loaded with loadXML()
     */
    public function testFragmentHEntryNoLangXML()
    {
        $input = new \DOMDocument();
        $input->loadXML('<div class="h-entry">This test is in English.</div>');
        $parser = new Parser($input);
        $result = $parser->parse();

        $this->assertArrayNotHasKey('lang', $result['items'][0]);
    } # end method testFragmentHEntryNoLangXML()

	/**
	 * Test with different <html lang>, h-entry lang, and h-entry without lang,
	 * which should inherit from the <html lang>
	 */
	public function testMultiLanguageInheritance()
	{
		$input = '<html lang="en"> <div class="h-entry">This test is in English.</div> <div class="h-entry" lang="es">Esta prueba está en español.</div> </html>';
		$parser = new Parser($input);
		$parser->lang = true;
		$result = $parser->parse();

		$this->assertArrayHasKey('lang', $result['items'][0]);
		$this->assertArrayHasKey('lang', $result['items'][1]);
		$this->assertEquals('en', $result['items'][0]['lang']);
		$this->assertEquals('es', $result['items'][1]['lang']);
	} # end method testMultiLanguageInheritance()

	/**
	 * Test feed with .h-feed lang which contains multiple h-entries of different languages
	 * (or none specified), which should inherit from the .h-feed lang.
	 */
	public function testMultiLanguageFeed()
	{
		$input = '<html> <div class="h-feed" lang="en"> <h1 class="p-name">Test Feed</h1> <div class="h-entry">This test is in English.</div> <div class="h-entry" lang="es">Esta prueba está en español.</div> <div class="h-entry" lang="fr">Ce test est en français.</div> </html>';
		$parser = new Parser($input);
		$parser->lang = true;
		$result = $parser->parse();

		$this->assertArrayHasKey('lang', $result['items'][0]);
		$this->assertEquals('en', $result['items'][0]['lang']);

		$this->assertArrayHasKey('lang', $result['items'][0]['children'][0]);
		$this->assertEquals('en', $result['items'][0]['children'][0]['lang']);

		$this->assertArrayHasKey('lang', $result['items'][0]['children'][1]);
		$this->assertEquals('es', $result['items'][0]['children'][1]['lang']);

		$this->assertArrayHasKey('lang', $result['items'][0]['children'][2]);
		$this->assertEquals('fr', $result['items'][0]['children'][2]['lang']);
	} # end method testMultiLanguageFeed()

	/**
	 * Test with language specified in <meta> http-equiv Content-Language
	 */
	public function testMetaContentLanguage()
	{
		$input = '<html> <meta http-equiv="Content-Language" content="es"/> <div class="h-entry">Esta prueba está en español.</div> </html>';
		$parser = new Parser($input);
		$parser->lang = true;
		$result = $parser->parse();

		$this->assertArrayHasKey('lang', $result['items'][0]);
		$this->assertEquals('es', $result['items'][0]['lang']);
	} # end method testMetaContentLanguage()

	/**
	 * Test with real-world post on voxpelli.com
	 * @see http://voxpelli.com/2015/09/oberoende-sociala-webben-2015/
	 */
	public function testVoxpelliCom()
	{
		$input = <<< END
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>Den oberoende sociala webben 2015 – Pelle Wessman</title>

<script>
    document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js');
</script>
<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="/css/style.css" media="all" rel="stylesheet" type="text/css">
<link href="/all.xml" rel="home alternate" title="All posts" type="application/atom+xml">
<link href="/english.xml" rel="home alternate" title="English posts" type="application/atom+xml">
<link href="http://voxpelli.com/2015/09/oberoende-sociala-webben-2015/" rel="canonical">
<meta content="@voxpelli" name="twitter:site">
<link href="/" rel="author" title="Pelle Wessman" type="text/html">
<link href="https://flattr.com/submit/auto?url=http%3A%2F%2Fvoxpelli.com%2F2015%2F09%2Foberoende-sociala-webben-2015%2F&amp;user_id=voxpelli&amp;title=Den+oberoende+sociala+webben+2015&amp;category=text&amp;tags=blog&amp;language=sv" rel="payment" title="Flattr this post" type="text/html">
<link href="https://webmention.herokuapp.com/api/webmention" rel="webmention">
<script src="/js/indieconfig.js" type="text/javascript"></script>
<script src="/js/webaction.js" type="text/javascript"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-6823873-1', 'auto');
    ga('send', 'pageview');
</script>
</head>
<body>
<div class="page">
<header>
<h1><a href="/">Pelle Wessman</a></h1>
<div class="subtitle">Things <a href="/about/">about me</a> and the world around us</div>
</header>
<article class="h-entry" lang="sv">
<header>
<h2 class="p-name">Den oberoende sociala webben 2015</h2>
</header>
<div class="e-content">
<p>Sociala medier. Synonymt med Facebook, Twitter, Instagram. Vad händer <a href="http://digital.di.se/artikel/vad-hander-nar-twitter-forsvinner">när en av dem försvinner</a>? Är det game over då? <a href="http://jardenberg.se/mindpark-16-natten-da-mikrobloggen-blev-av-med-oskulden/">Jaiku</a> i repris, fast denna gång utan livlina?</p>
<p>Framtiden för sociala medier kan låta dyster. Om de inte läggs ner helt så kan de ju i alla fall ha moraliska frågetecken kring <a href="http://www.svt.se/kultur/konst/facebook-censurerar-zorns-fotografier">konst</a>, <a href="https://en.wikipedia.org/wiki/Free_the_Nipple_%28campaign%29">aktivism</a> eller annat. Men i det fördolda har många länge ställt frågan: <strong>Om webben är öppen, varför måste det sociala vara stängt?</strong> Och nu börjar det röra sig där.</p>
<p>Att ställa en fråga har alltid varit bra. Att fixa en lösning har ofta varit bättre. Att fixa lösningar har dock <a href="http://voxpelli.com/2012/10/tent-ostatus-historielektionen/">inte lyckats lika bra</a> som alla frågor som ställts. Många fina lösningar har tänkts ut, men de flesta har ignorerat den verklighet och det sammanhang vi lever i och framförallt den <a href="https://en.wikipedia.org/wiki/Network_effect">nätverkseffekt</a> som ger de sociala medierna sitt största värde idag. Men – turligt nog rättar sig inte alla i det ledet och nu börjar det bli spännande.</p>
<p><a href="https://indiewebcamp.com/founders">IndieWebCamp startade 2010</a> av <a href="http://aaronparecki.com">Aaron Parecki</a> och <a href="https://indiewebcamp.com/User:Tantek.com">Tantek Çelik</a> för att de <strong>ville se ett annat fokus</strong> än det tanke-centrerade, små-akademiska som varit innan. <strong>Ett fokus på att skapa snarare än att prata.</strong> Ett fokus på att lösa ens egna problem. Och ett fokus på att äga sin egna data i praktiken, inte bara i teorin. Sedan dess har många anslutit sig och flertalet verktyg och tjänster växt fram – IndieWebben har blivit en rörelse.</p>
<p>Idag är i princip alla komponenter redo för att kunna återföra det som en gång i tiden kallades för mikrobloggar tillbaka till sina bloggrötter. Och det <strong>utan att bryta med de stora sociala medierna</strong> så som många tidigare lösningar krävt. Det finns de som redan gör så idag, bl.a. grundarna av IndieWebCamp, och även min blogg är väl nästan redo att sälla sig dit.</p>
<p>Så – idag kan man alltså i princip både vara sin egen och vara en del i de stora sociala plattformarna – och de skarpa hörnen som ännu finns blir mer och mer rundade för var dag som går.</p>
<p>För att vara mer konkret så har det ur IndieWeb-rörelsen kommit möjligheter att:</p>
<ul>
<li>Ta emot replies, likes m.m. på sina inlägg direkt från andra bloggar via en teknik som kallas <a href="http://indiewebcamp.com/Webmention">WebMentions</a>. Bl.a. jag själv <a href="http://voxpelli.com/2013/12/webmentions-for-static-pages/">tillhandahåller en Disqus-liknande tjänst</a> som gör det lätt att ta emot sådana reaktioner i realtid på vilken sida som helst – något flera <a href="http://www.kevinmarks.com/">har valt</a> <a href="http://www.kryogenix.org/days/2014/11/29/enabling-webmentions/">att nyttja</a>.</li>
<li>Posta poster från ens egna sajt till existerande sociala medier via vad som kallas <a href="https://indiewebcamp.com/POSSE">POSSE</a> (<em>Publish (on your) Own Site, Syndicate Elsewhere</em>) och få tillbaka reaktioner därifrån som WebMentions genom tjänster såsom <a href="https://www.brid.gy">Brid.gy</a> – så att de som ännu hänger kvar i klassiska sociala medier kan fortsatt vara lika delaktiga som de är idag.</li>
<li>Svara på inlägg direkt från någon annans sajt genom <a href="https://indiewebcamp.com/webactions">Webactions</a> och <a href="https://indiewebcamp.com/indie-config">Indie-Config</a> (se mitt <a href="http://voxpelli.com/2014/10/indie-config-overview/">tidigare inlägg</a>). Sådana knappar finns t.ex. på denna posten, men i nuläget har jag inte själv kopplat in reaktioner från Twitter så de kommentarer som postas via Twitter syns tyvärr inte här ännu.</li>
<li>Posta nytt innehåll via ett standardiserat API, <a href="https://indiewebcamp.com/Micropub">Micropub</a>. Det möjliggör t.ex. för mobila klienter (har spelat in <a href="https://www.youtube.com/watch?v=CBPmSpD2jN4">en screencast</a> som visar en prototyp på ett flöde som man kan få till redan idag) liksom för automatisk import från existerande medier såsom från Instagram via <a href="http://ownyourgram.com">OwnYourGram</a>. Mitt nuvarande IndieWeb-projekt som i princip är klart exponerar till och med ett sådant API för statiska <a href="http://jekyllrb.com/">Jekyll</a>-sajter på <a href="https://pages.github.com/">GitHub Pages</a> eftersom jag <a href="http://voxpelli.com/2011/08/moving-to-jekyll-and-english/">själv kör en sådan</a>. Kommer blogga mer om det längre fram.</li>
<li>En inloggningsmekanism, <a href="https://indiewebcamp.com/IndieAuth">IndieAuth</a>, som gör att man kan logga in på alla olika tjänster med sin egna sajt och ge tillgång till olika saker där – likt ”Sign in with Twitter” och liknande – fast som allt annat inom IndieWebben helt distribuerat.</li>
<li>Olika <a href="https://indiewebcamp.com/reader">läsare för oberoende innehåll</a> om man vill följa dem och interagera med dem oberoende av existerande medier. Vissa av dessa kan också användas för att interagera med poster och publicera nya vilket i princip gör dem till fullgoda sociala medie-alternativ, med enda skillnaden att alla poster och aktiviteter postas på individuella och helt separata bloggar. Hittills efterliknar tyvärr de flesta sådana läsarna RSS-läsare snarare än sociala medier, men det är mer av en designutmaning än en teknisk utmaning – grunden är densamma oavsett.</li>
</ul>
<p>Så I stort sett täcker IndieWebben idag åtminstone allt det en plattform som Twitter behöver kunna – och i stort så kan det göras lika smidigt där som det kan på Twitter.</p>
<p>IndieWeb-rörelsen tog dessutom för någon månad sedan och demonstrerade att de kunde genomföra det så kallade <a href="http://indiewebcamp.com/SWAT0">SWAT0-testet</a> som är tänkt att vara ett implementationsoberoende test för att visa att ens tjänster distribuerat klarar av att hantera ett måttligt vanligt sociala medier scenario. Tre aktörer med tre olika implementationer deltog i testet och många fler är på gång att kunna demonstrera detsamma, däribland min <a href="https://webmention.herokuapp.com/">egna WebMentions-tjänst</a> som <a href="https://github.com/voxpelli/webpage-webmentions/milestones/SWAT0">nästan har alla bitar på plats</a>.</p>
<p>Så – vad är slutsatsen med allt detta Indie-hit och Indie-dit? Är det inte ändå till syvende och sist bara massa tekniknördar som flippar loss med sina älskade tekniska termer och som saknar varje liten verklighetsförankring man skulle kunna önska? Nej. Denna gången är det annorlunda. Denna gången är fokus på verkstad. Denna gången bevisas att något funkar innan det dokumenteras som en standard. Denna gången löser något ett verkligt behov före att det lyfts fram som frälsaren för alla de andra. Ingen IndieWeb-standard har kommit till utan att också ha haft en fungerade använd implementation i verkligheten från dag ett.</p>
<p>Eftersom fokuset varit på verkstad så har indiewebben byggts för att kunna samexistera med dagens sociala webb och i takt med att de stora sociala mediernas roll därmed så sakteliga kan minska i takt med att oberoende lösningar börjar användas så kan ett gradvis överflyttande ske i takt med att allt fler upptäcker fördelarna – ett hyfsat realistiskt scenario alltså till skillnad mot många tidigare drömmar.</p>
<p>Allt är såklart inte guld och gröna skogar ännu. Det finns fortfarande svårigheter kvar och alla varken kan, bör eller kommer att byta över idag eller imorgon. Men det viktiga är: Det finns en lovande start som det är lätt att börja nosa på och i takt med att allt fler nosar så fås allt mer erfarenhet och med mer erfarenhet byggs än bättre upplevelser och plötsligt finns där en klar väg framåt (en väg som dessutom öppnar för många nya spännande innovationer inom området).</p>
<p>Så när Twitter kanske så småningom försvinner så kanske den inte blir ett nytt Jaiku. För då kanske vi flyttat tillbaka hem. Vi kanske då har vår bas på den egna bloggen igen. Och då kan <em>ingen</em> någonsin stänga ner oss igen. Då är vi våra egna och ingen annans. Oberoende på riktigt. Så som webben är ment att vara.</p>
</div>
<div class="submitted-to linklist">
<h3>Inskickad till:</h3>
<ul>
<li><a class="u-category" href="http://news.indiewebcamp.com/sv">news.indiewebcamp</a></li>
</ul>
</div>
<footer lang="en"><time class="dt-published" datetime="2015-09-18T19:00:00+00:00" pubdate=""><a class="u-url u-uid" href="/2015/09/oberoende-sociala-webben-2015/">18 September 2015</a></time> by <a class="p-author h-card" href="/"><img alt="" class="u-photo" src="/avatar.jpg"> Pelle Wessman</a>
<div class="indie-actions"><a class="action like" href="https://plus.google.com/share?url={url}" target="_blank">Like</a> <a class="action repost" href="https://twitter.com/intent/tweet?url={url}" target="_blank">Share</a> <a class="action reply" href="https://twitter.com/intent/tweet?url={url}" target="_blank">Reply</a> </div>
</footer>
<a class="u-responses" href="https://webmention.herokuapp.com/api/mentions?format=html&url=http%3A%2F%2Fvoxpelli.com%2F2015%2F09%2Foberoende-sociala-webben-2015%2F">See mentions of this post</a></article>
<div>Have you written a response to this? Let me know the URL:
<form action="https://webmention.herokuapp.com/api/webmention" method="post"><input name="source" placeholder="http://example.com/my-cool-post" type="url"> <input name="target" type="hidden" value="http://voxpelli.com/2015/09/oberoende-sociala-webben-2015/"> <input type="submit" value="Send Webmention"></form>
</div>
<script src="https://webmention.herokuapp.com/js/cutting-edge.js"></script></div>
</body>
</html>
END;
		$parser = new Parser($input);
		$parser->lang = true;
		$result = $parser->parse();

		$this->assertArrayHasKey('lang', $result['items'][0]);
		$this->assertEquals('sv', $result['items'][0]['lang']);
	} # end method testVoxpelliCom()


	/**
	 * @see https://github.com/indieweb/php-mf2/issues/96#issuecomment-304457341
	 */
	public function testNoLangInParsedProperties() {
		$input = '<div class="h-entry" lang="sv" id="postfrag123">
  <h1 class="p-name">En svensk titel</h1>
  <div class="e-content" lang="en">With an <em>english</em> summary</div>
  <div class="e-content">Och <em>svensk</em> huvudtext</div>
</div>';
		$parser = new Parser($input);
		$parser->lang = true;
		$result = $parser->parse();

		$this->assertArrayNotHasKey('lang', $result['items'][0]['properties']);
		$this->assertArrayHasKey('lang', $result['items'][0]);
	}

}
