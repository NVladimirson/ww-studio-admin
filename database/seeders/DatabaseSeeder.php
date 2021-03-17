<?php

namespace Database\Seeders;

use App\Models\Groups;
use App\Models\Navigations;
use App\Models\SectionContactModel;
use App\Models\SectionImageTextModel;
use App\Models\Sections;
use App\Models\SectionSidebarModel;
use App\Models\SectionStandModel;
use App\Models\SectionStepModel;
// use App\Models\Sections;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Groups::create([
            'id' => '1',
            'group' => 'home'
        ]);

        Groups::create([
            'id' => '2',
            'group' => 'programme'
        ]);

        Groups::create([
            'id' => '3',
            'group' => 'about'
        ]);

        Groups::create([
            'id' => '4',
            'group' => 'booksmedia'
        ]);

        Groups::create([
            'id' => '5',
            'group' => 'contact'
        ]);

        Groups::create([
            'id' => '6',
            'group' => 'partners'
        ]);


        Groups::create([
            'id' => '7',
            'group' => 'seminars'
        ]);


        // \App\Models\User::factory(10)->create();
        Navigations::create([
            'parent' => 0,
            'group_id' => '1',
            'title' => 'Startseite'
        ]);

        Navigations::create([
            'parent' => 0,
            'group_id' => '2',
            'title' => 'weiterbildungsprogramme'
        ]);

        Navigations::create([
            'parent' => 0,
            'group_id' => '3',
            'title' => 'Über die dvks'
        ]);

        Navigations::create([
            'parent' => 0,
            'group_id' => '4',
            'title' => 'bÜcher & medien'
        ]);

        Navigations::create([
            'parent' => 0,
            'group_id' => '5',
            'title' => 'kontakt'
        ]);

        Navigations::create([
            'parent' => 0,
            'group_id' => '6',
            'title' => 'Partner'
        ]);

        Navigations::create([
            'parent' => 0,
            'group_id' => '7',
            'title' => 'Seminare'
        ]);

        Navigations::create([
            'parent' => 2,
            'group_id' => '2',
            'title' => 'Vertriebsleiterausbildung (IHK)'
        ]);

        Navigations::create([
            'parent' => 2,
            'group_id' => '2',
            'title' => 'Geprüfter Vertriebsleiter (CEA)'
        ]);

        Navigations::create([
            'parent' => 2,
            'group_id' => '2',
            'title' => 'Trainer für betriebliche Weiterbildung (IHK)'
        ]);

        Navigations::create([
            'parent' => 2,
            'group_id' => '2',
            'title' => 'Management- und Führungstrainer (IHK)'
        ]);

        // SectionContactModel::create();

        // SectionImageTextModel::create();

        // SectionSidebarModel::create();

        // SectionStandModel::create();

        // SectionStepModel::create();

        Sections::create([
            'position' => 1,
            'navigation_id' => 1,
            'html' => '
            <section class="header-section wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">

            <div class="container">
                <div class="row align-items-end">
                    <div class="col-12">
                        <div class="section-container">
                            <div class="article">
                                <h1 class="title">
                                    Vertriebsleiter-
                                    Ausbildung
                                    IHK oder CEA
                                </h1>
                                <span class="sub-title">Nutzen Sie Ihre Chance</span>
                            </div>
                            <a href="" class="link">mehr erfahren <i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>'
        ]);

        Sections::create([
            'position' => 2,
            'navigation_id' => 1,
            'html' => '
            <section class="index-section2" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-wrapper">
                    <img src="img/index-s2.jpg" alt="" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-content">
                    <h2 class="section-title">Wo stehen Sie?</h2>
                    <p class="text">Der nächste Schritt in Ihrer Karriere ist eine Führungsposition im Vertrieb oder Sie sind
                                    bereits Vertriebsleiter und wollen einen qualifizierten Abschluss?</p>
                    <p class="text">
                        Ein erfolgreicher Vertrieb ist der Motor eines jeden Unternehmens. Als Vertriebsleiter bewegen Sie sich jedoch oftmals auf dünnem Eis.
                    </p>
                    <ul class="list">
                        <li>Die nötige BWL-Grundlage fehlt</li>
                        <li>Führungskompetenzen fehlen </li>
                        <li>Unternehmerisches Denken muss gelernt werden </li>
                        <li>Austausch auf Augenhöhe unter Gleichgesinnten fehlt </li>
                        <li>Best-Practices zur Umsetzung im eigenen Unternehmen fehlen</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>'
        ]);

        Sections::create([
            'position' => 3,
            'navigation_id' => 1,
            'html' => '
            <section class="index-section5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title center">3 Schritte zu Ihrem vertrieblichen Bildungsabschluss:</h2>
            </div>
            <div class="col-md-4">
                <div class="item-wrap wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="icon">
                        <span class="icon-home_big_icon_1"></span>
                    </div>
                    <p class="text">Beratungsgespräch</p>
                    <a href="" class="btn active">loslegen</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-wrap wow slideInUp" data-wow-duration="1.5s" data-wow-delay="0s">
                    <div class="icon">
                        <span class="icon-home_big_icon_2"></span>
                    </div>
                    <p class="text">Auswahl des geeigneten Kurses</p>
                    <a href="" class="btn active">loslegen</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-wrap wow slideInUp" data-wow-duration="2s" data-wow-delay="0s">
                    <div class="icon">
                        <span class="icon-home_big_icon_3"></span>
                    </div>
                    <p class="text">Abschluss <small>
                        (IHK Zertifikat oder Personenzertifizierung DIN EN ISO/IEC 17024)</small>
                    </p>
                    <a href="" class="btn active">loslegen</a>
                </div>
            </div>
        </div>
    </div>
</section>'
        ]);

        Sections::create([
            'position' => 4,
            'navigation_id' => 1,
            'html' => '
            <section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-wrapper  wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="contact-info">
                        <img src="img/contact.jpg" alt="">
                        <div class="contact-block">
                            <p class="text">
                                Klaus Schwarz freut sich auf Ihren Anruf unter Telefon:
                            </p>
                            <a href="tel:4961044099846"><strong>+49 6104 4099846</strong></a>
                        </div>
                    </div>
                    <form class="contact-form">
                        <h3 class="section-title">Nutzen Sie Ihre Chance!</h3>
                        <p class="text">
                            Wir helfen Ihnen gerne bei der Auswahl der für Sie passenden Weiterbildung.
                        </p>
                        <div class="form_field"><input type="text" name="name" placeholder="Ihr Name"></div>
                        <div class="form_field"><input type="email" name="email" placeholder="Ihre E-Mail"></div>
                        <div class="form_field"><input type="text" name="phone" placeholder="Ihre Telefonnummer"></div>
                        <div class="form_field">
                            <textarea name="message" placeholder="Ihre Nachricht"></textarea>
                        </div>
                        <button class="btn active">Nachricht senden</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>'
        ]);

        Sections::create([
            'position' => 5,
            'navigation_id' => 1,
            'html' => '
            <section class="index-section9">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title center wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">Für Sie interessante Veranstaltungen</h2>
                <p class="text center subtitle wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">
                    Trainings & Seminare
                </p>
                <div class="events_slider wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="event_item">
                        <div class="event_item-wrapper">
                            <strong class="event_item-category">Seminare</strong>
                            <p class="event_item-title">Lorem ipsum dolor sit amet</p>
                            <p class="event_item-description">
                                Aenean scelerisque urna at elementum iaculis. Fusce nibh nisi, hendrerit eu lorem eget, placerat iaculis dolor.
                            </p>

                            <div class="event_item-event-data">
                                <div class="icon-wrap">
                                    <span class="icon-calendar"></span>
                                </div>
                                <span class="text">01.12.2019</span>
                            </div>

                        </div>
                        <a href="" class="btn active">Weiterlesen</a>
                    </div>
                    <div class="event_item">
                        <div class="event_item-wrapper">
                            <strong class="event_item-category">Seminare</strong>
                            <p class="event_item-title">Lorem ipsum dolor sit amet</p>
                            <p class="event_item-description">
                                Aenean scelerisque urna at elementum iaculis. Fusce nibh nisi, hendrerit eu lorem eget, placerat iaculis dolor.
                            </p>

                            <div class="event_item-event-data">
                                <div class="icon-wrap">
                                    <span class="icon-calendar"></span>
                                </div>
                                <span class="text">01.12.2019</span>
                            </div>

                        </div>
                        <a href="" class="btn active">Weiterlesen</a>
                    </div>
                    <div class="event_item">
                        <div class="event_item-wrapper">
                            <strong class="event_item-category">Seminare</strong>
                            <p class="event_item-title">Lorem ipsum dolor sit amet</p>
                            <p class="event_item-description">
                                Aenean scelerisque urna at elementum iaculis. Fusce nibh nisi, hendrerit eu lorem eget, placerat iaculis dolor.
                            </p>
                            <div class="event_item-event-data">
                                <div class="icon-wrap">
                                    <span class="icon-calendar"></span>
                                </div>
                                <span class="text">01.12.2019</span>
                            </div>

                        </div>
                        <a href="" class="btn active">Weiterlesen</a>
                    </div>
                    <div class="event_item">
                        <div class="event_item-wrapper">
                            <strong class="event_item-category">Seminare</strong>
                            <p class="event_item-title">Lorem ipsum dolor sit amet</p>
                            <p class="event_item-description">
                                Aenean scelerisque urna at elementum iaculis. Fusce nibh nisi, hendrerit eu lorem eget, placerat iaculis dolor.
                            </p>

                            <div class="event_item-event-data">
                                <div class="icon-wrap">
                                    <span class="icon-calendar"></span>
                                </div>
                                <span class="text">01.12.2019</span>
                            </div>

                        </div>
                        <a href="" class="btn active">Weiterlesen</a>
                    </div>
                    <div class="event_item">
                        <div class="event_item-wrapper">
                            <strong class="event_item-category">Seminare</strong>
                            <p class="event_item-title">Lorem ipsum dolor sit amet</p>
                            <p class="event_item-description">
                                Aenean scelerisque urna at elementum iaculis. Fusce nibh nisi, hendrerit eu lorem eget, placerat iaculis dolor.
                            </p>

                            <div class="event_item-event-data">
                                <div class="icon-wrap">
                                    <span class="icon-calendar"></span>
                                </div>
                                <span class="text">01.12.2019</span>
                            </div>

                        </div>
                        <a href="" class="btn active">Weiterlesen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>'
        ]);

    }
}
