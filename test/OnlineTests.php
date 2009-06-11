<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * 'License'); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * 'AS IS' BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

/*
 * This file is meant to be run through a php command line, not called
 * directly through the web browser. To run these tests from the command line:
 * # cd /path/to/client
 * # phpunit test/OnlineTests.php
 */

require_once '__init__.php';
require_once 'OrkutSandboxRpcTests.php';
require_once 'OrkutSandboxRestTests.php';
require_once 'GoogleSandboxRpcTests.php';
require_once 'GoogleSandboxRestTests.php';
require_once 'FriendConnectRestTests.php';
require_once 'MySpaceTests.php';
require_once 'PartuzaRpcTests.php';
require_once 'PartuzaRestTests.php';
require_once 'PlaxoRestTests.php';

class OnlineTests {
  public static function suite() {
    $suite = new PHPUnit_Framework_TestSuite();
    $suite->setName('OnlineTests');
    $suite->addTestSuite(new OrkutSandboxRpcTests());
    $suite->addTestSuite(new OrkutSandboxRestTests());
    $suite->addTestSuite(new GoogleSandboxRpcTests());
    $suite->addTestSuite(new GoogleSandboxRestTests());
    $suite->addTestSuite(new PartuzaRpcTests());
    $suite->addTestSuite(new PartuzaRestTests());
    $suite->addTestSuite(new FriendConnectRestTests());
    $suite->addTestSuite(new MySpaceTests());
    $suite->addTestSuite(new PlaxoRestTests());
    return $suite;
  }
}