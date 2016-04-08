<?php
class Book {
  public $Author; // string
  public $Id; // int
  public $Title; // string
}

class GetBooks {
}

class GetBooksResponse {
  public $GetBooksResult; // ArrayOfBook
}

class GetBook {
  public $id; // int
}

class GetBookResponse {
  public $GetBookResult; // Book
}

class AddBook {
  public $book; // Book
}

class AddBookResponse {
  public $AddBookResult; // boolean
}

class UpdateBook {
  public $book; // Book
}

class UpdateBookResponse {
  public $UpdateBookResult; // boolean
}

class DeleteBook {
  public $id; // int
}

class DeleteBookResponse {
  public $DeleteBookResult; // boolean
}

class char {
}

class duration {
}

class guid {
}


/**
 * SoapService class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class SoapService extends SoapClient {

  private static $classmap = array(
                                    'Book' => 'Book',
                                    'GetBooks' => 'GetBooks',
                                    'GetBooksResponse' => 'GetBooksResponse',
                                    'GetBook' => 'GetBook',
                                    'GetBookResponse' => 'GetBookResponse',
                                    'AddBook' => 'AddBook',
                                    'AddBookResponse' => 'AddBookResponse',
                                    'UpdateBook' => 'UpdateBook',
                                    'UpdateBookResponse' => 'UpdateBookResponse',
                                    'DeleteBook' => 'DeleteBook',
                                    'DeleteBookResponse' => 'DeleteBookResponse',
                                    'char' => 'char',
                                    'duration' => 'duration',
                                    'guid' => 'guid',
                                   );

  public function SoapService($wsdl = "http://localhost:53745/SoapService.svc?wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param GetBooks $parameters
   * @return GetBooksResponse
   */
  public function GetBooks(GetBooks $parameters) {
    return $this->__soapCall('GetBooks', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetBook $parameters
   * @return GetBookResponse
   */
  public function GetBook(GetBook $parameters) {
    return $this->__soapCall('GetBook', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param AddBook $parameters
   * @return AddBookResponse
   */
  public function AddBook(AddBook $parameters) {
    return $this->__soapCall('AddBook', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param UpdateBook $parameters
   * @return UpdateBookResponse
   */
  public function UpdateBook(UpdateBook $parameters) {
    return $this->__soapCall('UpdateBook', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param DeleteBook $parameters
   * @return DeleteBookResponse
   */
  public function DeleteBook(DeleteBook $parameters) {
    return $this->__soapCall('DeleteBook', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

}

?>
