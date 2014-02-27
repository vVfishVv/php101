<?php
defined('BASEPATH') || exit('No direct script access allowed');
require_once('config.php');

$connection = new PDO(DB_CONNECTION, DB_USER, DB_PASSWORD);

/**
 * Gets a single visitor record from the sql database by email
 * @return array
 */
function visitor($email = null)
{
  $sql = sprintf("SELECT * FROM visitors WHERE email = %s", prepareString($email));
  $sth = $connection->prepare($sql);
  return $sth->fetchAll();
}

/**
 * Gets all visitors from the database
 * @return array
 */
function visitors()
{
  $sth = $connection->prepare("SELECT * FROM visitors");
  $sth->execute();
  return $sth->fetchAll();
}

/**
 * Saves a visitor record to the database
 * @return void
 */
function saveVisitor(Visitor $visitor)
{
  if (is_null($visitor->ID)) {
    $sql = sprintf("INSERT INTO visitors (Name, Email, Age, Address, Photo_url) VALUES (%s, %s, %s, %s, %s)",
      $visitor->name, $visitor->email, $visitor->age, $visitor->address, $visitor->photo_url);
  } else {
    $sql = sprintf("UPDATE visitors SET Name = %s, Email = %s, Age = %s,  Address = %s,  Photo_url = %s WHERE ID =  %s",
      $visitor->name, $visitor->email, $visitor->age, $visitor->address, $visitor->photo_url, $visitor->ID);
  }

  $sth = $connection->prepare($sql);
  $sth->execute();
}

/**
 * Removes a visitor record from the sql database by email
 * @return void
 */
function deleteVisitor($email)
{
  $sql = sprintf("DELETE FROM visitors WHERE email = %s", prepareString($email));
  $sth = $connection->prepare($sql);
  $sth->execute();
}

function prepareString($str)
{
  return $connection->quote($str);
}

class Visitor
{
  /**
   * @var int $ID The primary key of the visitor record
   *
   */
  public $ID = null;

  /**
   * @var string $name The name of a visitor
   *
   */
  public $name;

  /**
   * @var int $age The age of a visitor
   *
   */
  public $age;

  /**
   * @var string $email The email of the visitor
   *
   */
  public $email;

  /**
   * @var string $address The address of the visitor
   *
   */
  public $address;

  /**
   * @var string $photo_url The url that points to a photo of a visitor
   *
   */
  public $photo_url;

  /**
   * Constructor
   * @return void
   */
  public function __construct()
  {
  }
}
