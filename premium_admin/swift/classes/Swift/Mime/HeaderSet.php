<?php

/*
 HeaderSet interface from Swift Mailer.
 
 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
 
 */

//@require 'Swift/Mime/CharsetObserver.php';

/**
 * A collection of MIME headers.
 * 
 * @package Swift
 * @subpackage Mime
 * 
 * @author Chris Corbyn
 */
interface Swift_Mime_HeaderSet extends Swift_Mime_CharsetObserver
{
  
  /**
   * Add a new Mailbox Header with a list of $addresses.
   * 
   * @param string $name
   * @param array|string $addresses
   */
  public function addMailboxHeader($name, $addresses = null);
  
  /**
   * Add a new Date header using $timestamp (UNIX time).
   * 
   * @param string $name
   * @param int $timestamp
   */
  public function addDateHeader($name, $timestamp = null);
  
  /**
   * Add a new basic text header with $name and $value.
   * 
   * @param string $name
   * @param string $value
   */
  public function addTextHeader($name, $value = null);
  
  /**
   * Add a new ParameterizedHeader with $name, $value and $params.
   * 
   * @param string $name
   * @param string $value
   * @param array $params
   */
  public function addParameterizedHeader($name, $value = null,
    $params = array());
  
  /**
   * Add a new ID header for Message-ID or Content-ID.
   * 
   * @param string $name
   * @param string|array $ids
   */
  public function addIdHeader($name, $ids = null);
  
  /**
   * Add a new Path header with an address (path) in it.
   * 
   * @param string $name
   * @param string $path
   */
  public function addPathHeader($name, $path = null);
  
  /**
   * Returns true if at least one header with the given $name exists.
   * 
   * If multiple headers match, the actual one may be specified by $index.
   * 
   * @param string $name
   * @param int $index
   * 
   * @return boolean
   */
  public function has($name, $index = 0);
  
  /**
   * Set a header in the HeaderSet.
   * 
   * The header may be a previously fetched header via {@link get()} or it may
   * be one that has been created separately.
   * 
   * If $index is specified, the header will be inserted into the set at this
   * offset.
   * 
   * @param Swift_Mime_Header $header
   * @param int $index
   */
  public function set(Swift_Mime_Header $header, $index = 0);
  
  /**
   * Get the header with the given $name.
   * If multiple headers match, the actual one may be specified by $index.
   * Returns NULL if none present.
   * 
   * @param string $name
   * @param int $index
   * 
   * @return Swift_Mime_Header
   */
  public function get($name, $index = 0);
  
  /**
   * Get all headers with the given $name.
   * 
   * @param string $name
   * 
   * @return array
   */
  public function getAll($name = null);
  
  /**
   * Remove the header with the given $name if it's set.
   * 
   * If multiple headers match, the actual one may be specified by $index.
   * 
   * @param string $name
   * @param int $index
   */
  public function remove($name, $index = 0);
  
  /**
   * Remove all headers with the given $name.
   * 
   * @param string $name
   */
  public function removeAll($name);
  
  /**
   * Create a new instance of this HeaderSet.
   * 
   * @return Swift_Mime_HeaderSet
   */
  public function newInstance();
  
  /**
   * Define a list of Header names as an array in the correct order.
   * 
   * These Headers will be output in the given order where present.
   * 
   * @param array $sequence
   */
  public function defineOrdering(array $sequence);
  
  /**
   * Set a list of header names which must always be displayed when set.
   * 
   * Usually headers without a field value won't be output unless set here.
   * 
   * @param array $names
   */
  public function setAlwaysDisplayed(array $names);
  
  /**
   * Returns a string with a representation of all headers.
   * 
   * @return string
   */
  public function toString();
  
}
