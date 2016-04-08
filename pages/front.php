<?php
global $paginationHandler;
try {
    $soapService = new SoapService();
    $var = $soapService->GetBooks(new GetBooks())->GetBooksResult;
    
    /*$addBook = new AddBook();
    $book = new Book();
    $book->Author = "HALLO";
    $addBook->book = $book;
    $var2 = $soapService->AddBook($addBook)->AddBookResult;
    
    echo $var2;*/

    if($paginationHandler->Initialize(4, $var->Book)) {
        foreach($paginationHandler->sliced_array as $value){
            echo $value->Title ." <br/>";
        }
    }
} catch(SoapFault $ex) {
    ErrorHandler::DisplayWarning($ex->faultstring);
}
?>

<nav>
    <ul class="pagination">
        <?php $paginationHandler->BuildPagination(); ?>
    </ul>
</nav>