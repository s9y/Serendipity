<?php

/**
 * Tests of the parsing methods within mf2\Parser
 */

namespace Mf2\Parser\Test;

use Mf2\Parser;
use PHPUnit_Framework_TestCase;

class ParseDTTest extends PHPUnit_Framework_TestCase {

	public function setUp() {
		date_default_timezone_set('Europe/London');
	}

	// Note that value-class tests for dt-* attributes are stored elsewhere, as there are so many of the bloody things

	/**
	 * @group parseDT
	 */
	public function testParseDTHandlesImg() {
		$input = '<div class="h-event"><img class="dt-start" alt="2012-08-05T14:50"></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2012-08-05T14:50', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * @group parseDT
	 */
	public function testParseDTHandlesDataValueAttr() {
		$input = '<div class="h-event"><data class="dt-start" value="2012-08-05T14:50"></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2012-08-05T14:50', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * @group parseDT
	 */
	public function testParseDTHandlesDataInnerHTML() {
		$input = '<div class="h-event"><data class="dt-start">2012-08-05T14:50</data></div>';
		$parser = new Parser($input);
		$output = $parser->parse();


		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2012-08-05T14:50', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * @group parseDT
	 */
	public function testParseDTHandlesAbbrValueAttr() {
		$input = '<div class="h-event"><abbr class="dt-start" title="2012-08-05T14:50"></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2012-08-05T14:50', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * @group parseDT
	 */
	public function testParseDTHandlesAbbrInnerHTML() {
		$input = '<div class="h-event"><abbr class="dt-start">2012-08-05T14:50</abbr></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2012-08-05T14:50', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * @group parseDT
	 */
	public function testParseDTHandlesTimeDatetimeAttr() {
		$input = '<div class="h-event"><time class="dt-start" datetime="2012-08-05T14:50"></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2012-08-05T14:50', $output['items'][0]['properties']['start'][0]);
	}

  /**
   * @group parseDT
   */
  public function testParseDTHandlesTimeDatetimeAttrWithZ() {
    $input = '<div class="h-event"><time class="dt-start" datetime="2012-08-05T14:50:00Z"></div>';
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayHasKey('start', $output['items'][0]['properties']);
    $this->assertEquals('2012-08-05T14:50:00Z', $output['items'][0]['properties']['start'][0]);
  }

  /**
   * @group parseDT
   */
  public function testParseDTHandlesTimeDatetimeAttrWithTZOffset() {
    $input = '<div class="h-event"><time class="dt-start" datetime="2012-08-05T14:50:00-0700"></div>';
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayHasKey('start', $output['items'][0]['properties']);
    $this->assertEquals('2012-08-05T14:50:00-0700', $output['items'][0]['properties']['start'][0]);
  }

  /**
   * @group parseDT
   */
  public function testParseDTHandlesTimeDatetimeAttrWithTZOffset2() {
    $input = '<div class="h-event"><time class="dt-start" datetime="2012-08-05T14:50:00-07:00"></div>';
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayHasKey('start', $output['items'][0]['properties']);
    $this->assertEquals('2012-08-05T14:50:00-07:00', $output['items'][0]['properties']['start'][0]);
  }

	/**
	 * @group parseDT
	 */
	public function testParseDTHandlesTimeInnerHTML() {
		$input = '<div class="h-event"><time class="dt-start">2012-08-05T14:50</time></div>';
		$parser = new Parser($input);
		$output = $parser->parse();


		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2012-08-05T14:50', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * @group parseDT
	 */
	public function testParseDTHandlesInsDelDatetime() {
		$input = '<div class="h-event"><ins class="dt-start" datetime="2012-08-05T14:50"></ins><del class="dt-end" datetime="2012-08-05T18:00"></del></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertArrayHasKey('end', $output['items'][0]['properties']);
		$this->assertEquals('2012-08-05T14:50', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('2012-08-05T18:00', $output['items'][0]['properties']['end'][0]);
	}

	/**
	 * @group parseDT
	 * @group valueClass
	 */
	public function testYYYY_MM_DD__HH_MM() {
		$input = '<div class="h-event"><span class="dt-start"><span class="value">2012-10-07</span> at <span class="value">21:18</span></span></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2012-10-07 21:18', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * @group parseDT
	 * @group valueClass
	 */
	public function testAbbrYYYY_MM_DD__HH_MM() {
		$input = '<div class="h-event"><span class="dt-start"><abbr class="value" title="2012-10-07">some day</abbr> at <span class="value">21:18</span></span></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2012-10-07 21:18', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * @group parseDT
	 * @group valueClass
	 */
	public function testYYYY_MM_DD__HHpm() {
		$input = '<div class="h-event"><span class="dt-start"><span class="value">2012-10-07</span> at <span class="value">9pm</span></span></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2012-10-07 21:00', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * @group parseDT
	 * @group valueClass
	 */
	public function testYYYY_MM_DD__HH_MMpm() {
		$input = '<div class="h-event"><span class="dt-start"><span class="value">2012-10-07</span> at <span class="value">9:00pm</span></span></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2012-10-07 21:00', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * @group parseDT
	 * @group valueClass
	 */
	public function testYYYY_MM_DD__HH_MM_SSpm() {
		$input = '<div class="h-event"><span class="dt-start"><span class="value">2012-10-07</span> at <span class="value">9:00:00pm</span></span></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2012-10-07 21:00:00', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * This test name refers to the value-class used within the dt-end.
	 * @group parseDT
	 * @group valueClass
	 */
	public function testImpliedDTEndWithValueClass() {
		$input = '<div class="h-event"> <span class="dt-start"><span class="value">2014-06-04</span> at <span class="value">18:30</span> <span class="dt-end"><span class="value">19:30</span></span></span> </div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertArrayHasKey('end', $output['items'][0]['properties']);
		$this->assertEquals('2014-06-04 18:30', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('2014-06-04 19:30', $output['items'][0]['properties']['end'][0]);
	}

	/**
	 * This test name refers to the lack of value-class within the dt-end.
	 * @group parseDT
	 * @group valueClass
	 */
	public function testImpliedDTEndWithoutValueClass() {
		$input = '<div class="h-event"> <span class="dt-start"><span class="value">2014-06-05</span> at <span class="value">18:31</span> <span class="dt-end">19:31</span></span> </div>';

		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertArrayHasKey('end', $output['items'][0]['properties']);
		$this->assertEquals('2014-06-05 18:31', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('2014-06-05 19:31', $output['items'][0]['properties']['end'][0]);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/pull/46
	 * @group parseDT
	 * @group valueClass
	 */
	public function testImpliedDTEndUsingNonValueClassDTStart() {
		$input = '<div class="h-event"> <time class="dt-start">2014-06-05T18:31</time> until <span class="dt-end">19:31</span></span> </div>';

		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertArrayHasKey('end', $output['items'][0]['properties']);
		$this->assertEquals('2014-06-05T18:31', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('2014-06-05 19:31', $output['items'][0]['properties']['end'][0]);
	}

	/**
	 * @group parseDT
	 * @group valueClass
	 */
	public function testDTStartOnly() {
		$input = '<div class="h-event"> <span class="dt-start"><span class="value">2014-06-06</span> at <span class="value">18:32</span> </span> </div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2014-06-06 18:32', $output['items'][0]['properties']['start'][0]);
		$this->assertArrayNotHasKey('end', $output['items'][0]['properties']);
	}

	/**
	 * @group parseDT
	 * @group valueClass
	 */
	public function testDTStartDateOnly() {
		$input = '<div class="h-event"> <span class="dt-start"><span class="value">2014-06-07</span> </span> </div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertEquals('2014-06-07', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * TZ offsets normalized only for VCP.
	 * This behavior is implied from "However the colons ":" separating the hours and minutes of any timezone offset are optional and discouraged in order to make it less likely that a timezone offset will be confused for a time."
	 * @see http://microformats.org/wiki/index.php?title=value-class-pattern&oldid=66473##However+the+colons
	 */
	public function testNormalizeTZOffsetVCP() {
		$input = '<div class="h-event">
            <span class="dt-start"> <time class="value" datetime="2017-05-27">May 27</time>, from
            <time class="value">20:57-07:00</time> </span>
        </div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2017-05-27 20:57-0700', $output['items'][0]['properties']['start'][0]);
	}


	/**
	 * TZ offsets *not* normalized for non-VCP dates
	 */
	public function testNoNormalizeTZOffset() {
		$input = '<div class="h-entry"> <time class="dt-start" datetime="2018-03-13 15:30-07:00">March 13, 2018 3:30PM</time> </div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2018-03-13 15:30-07:00', $output['items'][0]['properties']['start'][0]);
	}


	/**
	 * @see https://github.com/indieweb/php-mf2/issues/115
	 */
	public function testDoNotAddT() {
		$input = '<div class="h-entry">
  <span class="dt-start">
    <time class="value" datetime="2009-06-26">26 July</time>, from
    <time class="value">19:00:00-08:00</time>
  </span>
</div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2009-06-26 19:00:00-0800', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/115
	 */
	public function testPreserrveTIfAuthored() {
		$input = '<div class="h-entry"> <time class="dt-start" datetime="2009-06-26T19:01-08:00">26 July, 7:01pm</time> </div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2009-06-26T19:01-08:00', $output['items'][0]['properties']['start'][0]);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/126
	 */
	public function testDtVCPTimezone() {
		$input = '<div class="h-event">
 <span class="e-summary">HomebrewWebsiteClub Berlin</span> will be next on
 <span class="dt-start">
  <span class="value">2017-05-31</span>, from
  <span class="value">19:00</span> (UTC<span class="value">+02:00</span>)
</span> to  <span class="dt-end">21:00</span>.</div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2017-05-31 19:00+0200', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('2017-05-31 21:00+0200', $output['items'][0]['properties']['end'][0]);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/126
	 */
	public function testDtVCPTimezoneShort() {
		$input = '<div class="h-event">
 <span class="e-summary">HomebrewWebsiteClub Berlin</span> will be next on
 <span class="dt-start">
  <span class="value">2017-05-31</span>, from
  <span class="value">19:00</span> (UTC<span class="value">+2</span>)
</span> to  <span class="dt-end">21:00</span>.</div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2017-05-31 19:00+0200', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('2017-05-31 21:00+0200', $output['items'][0]['properties']['end'][0]);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/126
	 */
	public function testDtVCPTimezoneNoLeadingZero() {
		$input = '<div class="h-event">
	<span class="dt-start">
		<span class="value">2017-06-17</span>
		<span class="value">22:00-700</span>
	</span>
	<span class="dt-end">
		<span class="value">2017-06-17</span>
		<span class="value">23:00-700</span>
	</span>
</div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2017-06-17 22:00-0700', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('2017-06-17 23:00-0700', $output['items'][0]['properties']['end'][0]);
	}

	/**
	 * @see https://github.com/microformats/microformats2-parsing/issues/4
	 */
	public function testImplyTimezoneFromStart() {
		$input = '<div class="h-event"> <time class="dt-start" datetime="2014-09-11 13:30-0700">13:30</time> to <time class="dt-end">15:30</time> </div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2014-09-11 13:30-0700', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('2014-09-11 15:30-0700', $output['items'][0]['properties']['end'][0]);
	}

	/**
	 * @see https://github.com/microformats/microformats2-parsing/issues/4
	 */
	public function testImplyTimezoneFromEnd() {
		$input = '<div class="h-event"> <time class="dt-start" datetime="2014-09-11 13:30">13:30</time> to <time class="dt-end">15:30-0700</time> </div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2014-09-11 13:30-0700', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('2014-09-11 15:30-0700', $output['items'][0]['properties']['end'][0]);
	}

	/**
	 *
	 */
	public function testAMPMWithPeriods() {
		$input = '<div class="h-event">
	<span class="dt-start">
		<span class="value">2017-06-11</span>
		<span class="value">10:00P.M.</span>
	</span>
	<span class="dt-end">
		<span class="value">2017-06-12</span>
		<span class="value">02:00a.m.</span>
	</span>
</div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2017-06-11 22:00', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('2017-06-12 02:00', $output['items'][0]['properties']['end'][0]);
	}

	/**
	 *
	 */
	public function testAMPMWithoutPeriods() {
		$input = '<div class="h-event">
	<span class="dt-start">
		<span class="value">2017-06-17</span>
		<span class="value">10:30pm</span>
	</span>
	<span class="dt-end">
		<span class="value">2017-06-18</span>
		<span class="value">02:30AM</span>
	</span>
</div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2017-06-17 22:30', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('2017-06-18 02:30', $output['items'][0]['properties']['end'][0]);
	}

	/**
	 *
	 */
	public function testDtVCPTimeAndTimezone() {
		$input = '<div class="h-event">
	<span class="dt-start">
		<span class="value">2017-06-17</span>
		<span class="value">13:30-07:00</span>
	</span>
	<span class="dt-end">
		<span class="value">2017-06-17</span>
		<span class="value">15:30-0700</span>
	</span>
</div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2017-06-17 13:30-0700', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('2017-06-17 15:30-0700', $output['items'][0]['properties']['end'][0]);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/147
	 */
	public function testDtVCPMultipleDatesAndTimezones() {
		$input = '<div class="h-event">
  <h1 class="p-name">Multiple date and time values</h1>

  <p> When:
    <span class="dt-start">
    <span class="value" title="June 1, 2014">2014-06-01</span>
    <span class="value" title="June 1, 3014">3014-06-01</span>
    <span class="value" title="12:30">12:30</span>
    (UTC<span class="value">-06:00</span>)
    <span class="value" title="23:00">23:00</span>
    (UTC<span class="value">+01:00</span>)
    –
    <span class="dt-end">19:30</span>
  </p>

</div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2014-06-01 12:30-0600', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('2014-06-01 19:30-0600', $output['items'][0]['properties']['end'][0]);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/149
	 */
	public function testDtWithoutYear() {
		$input = '<div class="h-card"> <time class="dt-bday" datetime="--12-28"></time> </div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('--12-28', $output['items'][0]['properties']['bday'][0]);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/167
	 * @see https://github.com/microformats/mf2py/blob/master/test/examples/datetimes.html
	 */
	public function testNormalizeOrdinalDate() {
		$input = '<div class="h-event">
	<h1 class="p-name">Ordinal date</h1>
	<p> When:
		<span class="dt-start">
			<span class="value">2016-062</span>
			<span class="value">12:30AM</span>
			(UTC<span class="value">-06:00</span>)
	</p>
</div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('2016-03-02 12:30-0600', $output['items'][0]['properties']['start'][0]);
	}
}

