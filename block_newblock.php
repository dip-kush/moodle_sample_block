<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Newblock block caps.
 *
 * @package    block_newblock
 * @copyright  Daniel Neis <danielneis@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
echo <<< EOT
<script  src="jquery.min.js" type="text/javascript"></script>
<script src="adapter.js" type="text/javascript"></script>
<script  src="oks.js" type="text/javascript"></script>  

EOT;
echo "<script>";
echo "var identity = 'chemistryclass'";
echo "</script>";

class block_newblock extends block_base {

      
    

    function init() {
        $this->title = get_string('pluginname', 'block_newblock');
    }

   public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }
 
   $this->content=new stdClass;
   $this->content->footer = '';
   $this->content->text = 'Live Call';
   $this->content->text.="<video id='remoteView' autoplay style='width: 200px; height: 200px'> </video>" ;
   $this->content->text.="<button onclick='video_call();'>Start Call</button><br>" ;
   $this->content->text.="<button onclick='hang_up(1);'>End Call</button>" ;

  
 
    return $this->content;
  }
}

?>
