<?php
// AVAST!  This be version 2007.05.22, 8:07pm DST.

// Source code copyright (c) 2007, Ben Hendel-Doying
// A few rights reserved...

// Inspired by Don Park's original idea, and Charles Darke's PHP implementation
// (I didn't happen to like Charles Darke's implementation, so this is my own)
// (I kind of wish my name rhymed with Park and Darke...)

// Generates a 9-square "ycon" using a seed out of a few (16) shapes.
// Interesting seeds include names, IP addresses, e-mail addresses, the current
// temperature where you live, the phase of the moon, your cat's name, or
// anything else.  Some of these are arguably more interesting than others >_>

// THIS SOFTWARE IS PROVIDED BY Ben Hendel-Doying ``AS IS'' AND ANY
// EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
// WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
// DISCLAIMED. IN NO EVENT SHALL Ben Hendel-Doying BE LIABLE FOR ANY
// DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
// (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
// LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
// ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
// (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
// SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

////////////////////////////////////////////////////////////////////////////////

// this is an arbitrary prime number, nice to add before hashing if you want to
// additionally secure the seed value (ex: IP, e-mail, internal userid, etc).
// HEY!  DON'T USE THE PRIME PROVIDED HERE!  GO FIND YOUR OWN!  FOR SERIOUSLY!

$ycon_salt = 263167;

// some web sites that provide prime numbers:
//  * http://www.rsok.com/~jrm/printprimes.html
//  * http://en.wikipedia.org/wiki/List_of_prime_numbers

////////////////////////////////////////////////////////////////////////////////

// the actual function!  returns a true-color image resource, suitable for
// imagepng'ing, or whatever else you'd like to do with it.

// $hash is a 16-byte hash (for example, as generated from md5())
// $size is the total width and height, in pixels, of the ycon to be generated
// $bg_* describe the background (transparent) color to be used, [0..255]

function ycon($hash, $size, $bg_red, $bg_green, $bg_blue)
{
  $draw_size = $size * 4;

  $red = hexdec(substr($hash, 0, 3)) % 12;       // 0-192 for color
  $green = hexdec(substr($hash, 3, 3)) % 12;     // (in increments of 16)
  $blue = hexdec(substr($hash, 6, 3)) % 12;

  $corners = hexdec(substr($hash, 9, 1)) % 16;   // 14 gylphs
  $corners_i = hexdec(substr($hash, 10, 1)) % 2; // inverted?
  $corners_a = hexdec(substr($hash, 11, 1)) % 4; // 4 rotations

  $edges = hexdec(substr($hash, 12, 1)) % 16;
  $edges_i = hexdec(substr($hash, 13, 1)) % 2;
  $edges_a = hexdec(substr($hash, 14, 1)) % 4;

  $center = hexdec(substr($hash, 15, 2)) % 6;    // 3 gylphs + 3 inverted

  $square = $draw_size / 3;

  $icon = imagecreatetruecolor($size, $size);
  $draw_icon = imagecreatetruecolor($draw_size, $draw_size);

  $background = imagecolorallocate($icon, $bg_red, $bg_green, $bg_blue);
  $color = imagecolorallocate($icon, $red * 16, $green * 16, $blue * 16);

  imagecolortransparent($icon, $background);

  $shape = $corners;
  $inverted = ($corners_i == 0);
  $rotation = $corners_a;

  draw_glpyh($draw_icon, 0, 0, $square, $color, $background, $shape, $rotation % 4, $inverted);
  draw_glpyh($draw_icon, $square * 2, 0, $square, $color, $background, $shape, ($rotation + 1) % 4, $inverted);
  draw_glpyh($draw_icon, $square * 2, $square * 2, $square, $color, $background, $shape, ($rotation + 2) % 4, $inverted);
  draw_glpyh($draw_icon, 0, $square * 2, $square, $color, $background, $shape, ($rotation + 3) % 4, $inverted);

  $shape = $edges;
  $inverted = ($edges_i == 0);
  $rotation = $edges_a;

  draw_glpyh($draw_icon, $square, 0, $square, $color, $background, $shape, $rotation % 4, $inverted);
  draw_glpyh($draw_icon, $square * 2, $square, $square, $color, $background, $shape, ($rotation + 1) % 4, $inverted);
  draw_glpyh($draw_icon, $square, $square * 2, $square, $color, $background, $shape, ($rotation + 2) % 4, $inverted);
  draw_glpyh($draw_icon, 0, $square, $square, $color, $background, $shape, ($rotation + 3) % 4, $inverted);

  $shape = (int)($center / 2);
  $inverted = (($center % 2) == 0);

  draw_glpyh($draw_icon, $square, $square, $square, $color, $background, $shape, 0, $inverted);

  imagecopyresampled($icon, $draw_icon, 0, 0, 0, 0, $size, $size, $draw_size, $draw_size);

  imagedestroy($draw_icon);

  return $icon;
}

////////////////////////////////////////////////////////////////////////////////

// function used internally to draw an individual glyph; one of the little guys
// that goes into one of the 9-squares of ycon.  you probably won't need to
// call this yourself, but there it is...

function draw_glpyh(&$image, $x, $y, $full, $fg_color, $bg_color, $shape, $rotation, $inverted)
{
  $quarter = $full / 4;
  $half = $full / 2;

  if($inverted)
  {
    imagefilledpolygon($image, array(0 + $x, 0 + $y, 0 + $x, $full + $y, $full + $x, $full + $y, $full + $x, 0 + $y), 4, $fg_color);
    $drawing_color = $bg_color;
  }
  else
  {
    imagefilledpolygon($image, array(0 + $x, 0 + $y, 0 + $x, $full + $y, $full + $x, $full + $y, $full + $x, 0 + $y), 4, $bg_color);
    $drawing_color = $fg_color;
  }

  switch($shape)
  {
    // the first few shapes are visually unchanged by 90° rotations, and thus
    // suitable for the center glyph

    case 0: // full square
      $points = array(
        0, 0,
        $full, 0,
        $full, $full,
        0, $full);
      break;

    case 1: // large diamond
      $points = array(
        $half, 0,
        $full, $half,
        $half, $full,
        0, $half);
      break;

    case 2: // center square
      $points = array(
        $quarter, $quarter,
        $half + $quarter, $quarter,
        $half + $quarter, $half + $quarter,
        $quarter, $half + $quarter);
      break;

    // okay, now we start with the interesting ones that change with rotation

    case 3: // tilted isosceles triangle
      $points = array(
        $full, 0,
        $half, $full,
        0, $half);
      break;

    case 4: // squat isosceles triangle
      $points = array(
        $half, $half,
        $full, $full,
        0, $full);
      break;

    case 5: // corner square
      $points = array(
        $half, $half,
        $half, $full,
        0, $full,
        0, $half);
      break;

    case 6: // rectangle
      $points = array(
        0, $half,
        $full, $half,
        $full, $full,
        0, $full);
      break;

    case 7: // skewed hourglass on its side
      $points = array(
        0, 0,
        $full, $full,
        $full, $half,
        0, $half);
      break;

    case 8: // upsidedown squat isosceles triangle
      $points = array(
        0, $half,
        $full, $half,
        $half, $full);
      break;

    case 9: // corner square, except one corner is pulled to the kitty-corner
      $points = array(
        $full, 0,
        $half, $full,
        0, $full,
        0, $half);
      break;

    case 10: // large isosceles triangle
      $points = array(
        $half, 0,
        $full, $full,
        0, $full);
      break;

    case 11: // large right triangle
      $points = array(
        0, 0,
        $full, $full,
        0, $full);
      break;

    case 12: // hourglass
      $points = array(
        0, 0,
        $full, $full,
        0, $full,
        $full, 0);
      break;

    case 13: // squat diamond
      $points = array(
        $quarter, 0,
        $half, $half,
        $quarter, $full,
        0, $half);
      break;

    case 14: // hourglass on its side (and kinda' squished...)
      $points = array(
        0, $half,
        $full, $full,
        $full, $half,
        0, $full);
      break;

    case 15: // corner triangle
      $points = array(
        0, $half,
        $half, $half,
        $half, $full);
      break;

    default:
      die('$shape must be in range [0..13] (' . $shape . ' is out of range)');
  }

  // for each point
  for($p = 0; $p < count($points) / 2; ++$p)
  {
    // normalized
    $normalized_x = $points[$p * 2] - $half;
    $normalized_y = $points[$p * 2 + 1] - $half;

    // then rotate
    for($i = 0; $i < $rotation; ++$i)
    {
      $old_x = $normalized_x;

      $normalized_x = -$normalized_y;
      $normalized_y = $old_x;
    }

    // then de-normalize and offset
    $points[$p * 2] = $normalized_x + $half + $x;
    $points[$p * 2 + 1] = $normalized_y + $half + $y;
  }

  // draw the bastard
  imagefilledpolygon($image, $points, count($points) / 2, $drawing_color);
}

?>