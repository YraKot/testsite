<?php


namespace App\Controllers;


use Sober\Controller\Controller;

class SingleUslugi extends Controller
{
    public function top_bar() {
        $field = get_field('content_top_bar_usluga');
        $return = array();

        foreach ($field as $block):
            $object = array();

            $object['title'] = $block['текст'];

            $return[] = (object) $object;

        endforeach;

        return $return;

    }

    public function firstSectionUl() {
        $field = get_field('_в_стоимость_входит_usluga');
        $return = array();

        foreach ($field as $block):
            $object = array();

            $object['title'] = $block['текст'];

            $return[] = (object) $object;

        endforeach;

        return $return;

    }
    public function list_specialnost_usluga() {
        $field = get_field('list_specialnost_usluga');
        $return = array();

        foreach ($field as $block):
            $object = array();

            $object['title'] = $block['текст'];

            $return[] = (object) $object;

        endforeach;

        return $return;

    }

    public function list_garant_usluga() {
        $field = get_field('list_garant_usluga');
        $return = array();

        foreach ($field as $block):
            $object = array();

            $object['title'] = $block['title'];
            $object['description'] = $block['content'];

            $return[] = (object) $object;

        endforeach;

        return $return;

    }
}
