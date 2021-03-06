<?php

require_once("vendor/autoload.php");

$data = array(
    'movies' => array(
        array(
            'name' => 'The Red Violin',
            'year' => '1998',
            'director' => 'François Girard',
            'imdb' => 7.7
        ),
        array(
            'name' => 'Eyes Wide Shut',
            'year' => '1999',
            'director' => 'Stanley Kubrick',
            'imdb' => 7.2
        ),
        array(
            'name' => 'The Inheritance',
            'year' => '1976',
            'director' => 'Mauro Bolognini',
            'imdb' => 6.7
        )
    ),
    'greeting' => array(
        'name' => 'Xiao',
        'from' => 'Boston'
    )
);

// Create factory classes
$jQueryTmpl_Factory = new \jossmp\jQueryTmpl\Factory();
$jQueryTmpl_Markup_Factory = new \jossmp\jQueryTmpl\Markup\Factory();
$jQueryTmpl_Data_Factory = new \jossmp\jQueryTmpl\Data\Factory();

// Create jQueryTmpl object
$jQueryTmpl = $jQueryTmpl_Factory->create();

// Create some data from our PHP array
$jQueryTmpl_Data = $jQueryTmpl_Data_Factory->createFromArray($data);

// Compile a template using a shared template file, or pass in text
$jQueryTmpl
    ->template(
        'movieTemplate',
        $jQueryTmpl_Markup_Factory->createFromFile('example.js')
    )
    ->template(
        'nameTemplate',
        $jQueryTmpl_Markup_Factory->createFromString('Hello {{=greeting.name}}!')
    )
    ->template(
        'ratingTemplate',
        $jQueryTmpl_Markup_Factory->createFromString("I'd give it a {{=this.imdb}}")
    );

$rendered = $jQueryTmpl
    ->tmpl("movieTemplate", $jQueryTmpl_Data)
    ->getHtml();

echo "<pre>$rendered</pre>\n";
