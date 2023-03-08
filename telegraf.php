<?php
global $title;
global $text;
$textStorage[] = array( 'title'=> $title, 'text'=>$text );

function add ( string $title, string $text, &$textStorage ) {
    print_r($textStorage);
}
$text0 = array( 'title'=>"Digital member", 'text'=>"Armen Arturovich" );
    $text1 = array( 'title'=>"Carmen", 'text'=>"Organ Sebastian" );
add ("Digital member", "Armen Arturovich", $text0 );
add ("Carmen", "Organn Sebastian", $text1 );


function remove ( $m, &$textStorage ):bool{

    if( array_key_exists( $m,$textStorage) ){
        unset( $textStorage[$m] );

        return true;
    }

    return false;
}
remove (0, $text0 );
print_r( $textStorage );
remove (5, $text0 );
print_r( $textStorage );


function edit ( int $m, string $title, string $text, &$textStorage ):bool{
    if ( in_array($text, $textStorage) ){
        $rec1 = readline(' ');
        print_r ("Заменить заголовок на "."\n".$rec1."\n" );
        $rec2 = readline(' ');
        print_r ("Заменить сообщение на "."\n".$rec2."\n" );
        print_r($textStorage."\n" );
        return true;
    }
    return false;
}
edit (1, "Row", "Armen", $text1 );

edit(33, "Kok", "Hello, how are you?", $text1 );
?>