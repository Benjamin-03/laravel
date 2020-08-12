<?php

use App\Course;
use Illuminate\Database\Seeder;
use Cocur\Slugify\Slugify;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slugify = new Slugify();
        
        $course = new Course();
        $course->title = 'Les bases de symfony 4';
        $course->subtitle = "Apprendre à créer un site avec symfony 4";
        $course->slug = $slugify->slugify($course->title);
        $course->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
        $course->price = 19.99;
        $course->save();

        $course = new Course();
        $course->title = 'Créer un site ecommerce avec Wordpress';
        $course->subtitle = "Construire un site ecommerce complet avec Wordpress";
        $course->slug = $slugify->slugify($course->title);
        $course->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
        $course->price = 39.99;
        $course->save();

        $course = new Course();
        $course->title =  'Les bases de laravel 7';
        $course->subtitle = "Construire une plateforme d'enseignement avec laravel 7";
        $course->slug = $slugify->slugify($course->title);
        $course->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
        $course->price = 59.99;
        $course->save();
    }
}
