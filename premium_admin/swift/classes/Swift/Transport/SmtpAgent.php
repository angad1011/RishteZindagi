<?php

/*
 SMTP command wrapper from Swift Mailer.
 
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

/**
 * Wraps an IoBuffer to send/receive SMTP commands/responses.
 * @package Swift
 * @subpackage Transport
 * @author Chris Corbyn
 */
interface Swift_Transport_SmtpAgent
{
  
  /**
   * Get the IoBuffer where read/writes are occurring.
   * @return Swift_Transport_IoBuffer
   */
  public function getBuffer();
  
  /**
   * Run a command against the buffer, expecting the given response codes.
   * If no response codes are given, the response will not be validated.
   * If codes are given, an exception will be thrown on an invalid response.
   * @param string $command
   * @param int[] $codes
   * @param string[] &$failures
   */
  public function executeCommand($command, $codes = array(), &$failures = null);
  
}
