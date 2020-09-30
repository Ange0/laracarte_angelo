<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelpersTest extends TestCase
{
    /** @test 
     * Va permettre de savoir si  App/page_title() est vide donc doit retourner le titre de base
    */
    public function page_title_should_return_the_title_base_if_empty()
    {
        //dd(page_title('About'));
        $this->assertEquals('laracarte - list of artisant',page_title(''));
    }

    /** @test 
     * Va permettre de savoir si  App/page_title() n'est pas vide donc doit retourner le titre est fourni
    */
    public function page_title_should_return_correctly_if_title_is_provided()
    {
        //dd(page_title('About'));
        $this->assertEquals('About | laracarte - list of artisant',page_title('About'));
        $this->assertEquals('Home | laracarte - list of artisant',page_title('Home'));
    }

    /** @test 
     * Va permettre de savoir si  App/set_active_route()   retourner la classe class de bootstrap
    */
    public function set_active_route_should_return_the_correct_class_based_on_given_route()
    {
       
        $this->get(route('home_path')); // va permettre de me rendre au niveau de la page d'Accueille d'abord
        $this->assertEquals('active',set_active_route('home_path'));
        $this->assertEquals('',set_active_route('About_path'));


        $this->get(route('contact_path')); // va permettre de me rendre au niveau de la page de contact
        $this->assertEquals('active',set_active_route('contact_path')); // quand je suis au niveau de cette route contact_path => /conatct
        $this->assertEquals('',set_active_route('home_path'));
        $this->assertEquals('',set_active_route('About_path'));
        
    }
}
