<?php

namespace App\Http\Controllers;

include(app_path() . '\Http\PlugIn\simplehtmldom_1_9_1\simple_html_dom.php');

use App\Models\Category;
use App\Models\Statistic;
use Illuminate\Http\Request;
use App\Models\Document;

class CrawController extends Controller
{
    public function craw(){

        //craw categorys
        $url = 'http://ditmewibu.com/';
        $html = file_get_html($url);
        $categorys = [];
        $crawed_cat = $html->find('div#tabs ul#panels li a');
        $i = 1;
        foreach($crawed_cat as $value){
            $categorys[$value->getAttribute('href')] = $i;
            $i++;
            $category = new Category();
            $category->name = $value->plaintext;
            $category->save();
        }
        $add_category = new Category();
        $add_category->id = 9999;
        $add_category->name = "Khác";
        $add_category->save();
        //dd($categorys);

        //craw documents
        $url = 'http://ditmewibu.com/';
        $html = file_get_html($url);
        $documents = [];
        $i = 0;
        $crawed_contents = $html->find('div div div.center');
        $crawed_titles = $html->find('div div h2');
        //dd($crawed_titles);
        foreach ($crawed_contents as $key => $value) {
            $document = new Document();

            $document->category_id = $categorys['#'.$crawed_titles[$key]->parent->parent->getAttribute('id')];

            $document->name = $crawed_titles[$key]->plaintext;

            $document->title = $crawed_titles[$key]->plaintext;

            $content = strpos(($value->find('p'))[0]->plaintext, 'Nhấn để copy')!=false ? trim(substr(($value->find('p'))[0]->plaintext, 0, strpos(($value->find('p'))[0]->plaintext, 'Nhấn để copy'))) : trim($content);

            $content = str_replace('                             ',' ',$content);

            $document->content = $content;

            $document->status = 1;

            $document->save();

            $statistic = Statistic::first();
            $statistic->docs_count = $statistic->docs_count+1;
            $statistic->save();
            $documents[$i++] = $document;
        }
        //dd($documents);
        return true;
    }
}
