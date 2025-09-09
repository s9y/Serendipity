<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:admin="http://webns.net/mvcb/"
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
   xmlns:wfw="http://wellformedweb.org/CommentAPI/"
   xmlns:content="http://purl.org/rss/1.0/modules/content/">

	<xsl:output method="html" doctype-system="about:legacy-compat" indent="yes" />

	<xsl:template match="/rss/channel">

		<html lang="en">
		<head>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />

			<title>
				<xsl:value-of select="title" />
			</title>

			<link rel="shortcut icon" type="image/ico" href="{ link }favicon.png" />
			<link rel="stylesheet" href="{ link }index.php?/serendipity.css" />
			<style>
				.rss_header {
					background: #a5e7d9;
					border: 2px solid #58afd9;
					margin-top: 0.5em;
					padding: 0.5em;
				}
			</style>
		</head>
		<body>
			<div id="page" class="container">
				<header id="banner" class="serendipity_entry">
					<p class="rss_header">Subscribe to this feed with a feedreader to get notifications about new articles. See <a href="https://aboutfeeds.com/">this explanation</a>, if you need help.</p>

					<h1 class="title">
						<xsl:value-of select="title" />
					</h1>
				</header>

				

				<p class="description serendipity_entry">
					<xsl:value-of select="description" />
				</p>
				
				
				<main id="content">
					<xsl:for-each select="./item">

						<article class="serendipity_entry">

							<h2 class="post_title">
								<a href="{ link }" class="post_link">
									<xsl:value-of select="title" />
								</a>
							</h2>

							<p class="post_preview">
								<xsl:value-of select="description" disable-output-escaping="yes" />
							</p>

							<p class="post_content">
								<xsl:value-of select="content:encoded" disable-output-escaping="yes" />
							</p>
						</article>

					</xsl:for-each>
				</main>
			</div>
		</body>
		</html>

	</xsl:template>

</xsl:stylesheet>
