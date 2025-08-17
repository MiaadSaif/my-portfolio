<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'MUAIN CRM',
                'desc' => 'CRM system with Laravel 8, AJAX, MySQL, Payment Integration.',
                'images' => ['/images/muain1.png', '/images/muain2.png']
            ],
            [
                'id' => 2,
                'title' => 'AI WhatsApp Chatbot',
                'desc' => 'AI-powered chatbot using OpenAI API and WhatsApp Business API.',
                'images' => ['/images/chatbot1.png', '/images/chatbot2.png']
            ],
            [
                'id' => 3,
                'title' => 'Car Rental System',
                'desc' => 'Flutter frontend + Laravel backend for managing rentals.',
                'images' => ['/images/car1.png', '/images/car2.png']
            ],
        ];

        return view('portfolio', compact('projects'));
    }

    // app/Http/Controllers/ProjectController.php

    public function getProjectDetails($id)
    {
        // ممكن تجيب البيانات من قاعدة البيانات مثلاً:
        // $project = Project::findOrFail($id);

        // هنا مثال ثابت فقط:
        $projects = [
            '1' => [
                'desc' => 'Built using Laravel 8, AJAX, MySQL with Socket notifications, payment integration, and MOCI APIs.',
                'images' => [
                    asset('images/muain/moean1.png'),
                    asset('images/muain/moean2.png'),
                    asset('images/muain/moean3.png'),
                    asset('images/muain/moean4.png'),
                    asset('images/muain/moean5.png'),
                ],
            ],

            '2' => [
                'desc' => 'Built using Laravel 8, AJAX, MySQL with Socket notifications, payment integration, and MOCI APIs.',
                'images' => [

                    asset('images/whtasapp/whatsapp1.png'),
                    asset('images/whtasapp/whatsapp2.png'),
                    asset('images/whtasapp/whatsapp3.png'),
                    asset('images/whtasapp/whatsapp4.png'),
                    asset('images/whtasapp/whatsapp5.png'),
                    asset('images/whtasapp/WhatsAppChat1.png'),
                    asset('images/whtasapp/WhatsAppChat2.png'),
                    asset('images/whtasapp/WhatsAppChat3.png'),
                    asset('images/whtasapp/WhatsAppChat4.png'),
                    asset('images/whtasapp/WhatsAppChat5.png'),


                ],
            ],
            '4' => [
                'desc' => 'Built using Laravel 8, AJAX, MySQL with Socket notifications, payment integration, and MOCI APIs.',
                'images' => [

                    asset('images/car/car.png'),
                    asset('images/car/car2.png'),




                ],
            ],
            '3' => [
                'desc' => 'Built using Laravel 8, AJAX, MySQL with Socket notifications, payment integration, and MOCI APIs.',
                'images' => [

                    asset('images/livewiremeta/livewireMeta.png'),
                    asset('images/livewiremeta/livewireMeta2.png'),
                    asset('images/livewiremeta/app.png'),




                ],
            ],
             '6' => [
                'desc' => 'Built using Laravel 8, AJAX, MySQL with Socket notifications, payment integration, and MOCI APIs.',
                'images' => [

                    asset('images/golang.png'),



                ],
            ],
'8' => [
                'desc' => 'Built using Laravel 8, AJAX, MySQL with Socket notifications, payment integration, and MOCI APIs.',
                'images' => [

                    asset('images/store.png'),



                ],
            ],

        ];

        if (!array_key_exists($id, $projects)) {
            return response()->json(['error' => 'As Backend'], 404);
        }

        return response()->json($projects[$id]);
    }
}
