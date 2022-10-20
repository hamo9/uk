@extends('layouts.master')
@section('title')
    {{ __('home.about us') }}
@endsection

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('home.about us') }}</h2>
                <ol>
                    <li><a href="{{ url('/') }}">{{ __('home.home') }}</a></li>
                    <li>{{ __('home.about us') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->

    <section class="sample-page">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-md-7">
                    <h2 class="h3 title_main mb-3">
                        {{ __('home.siteName') }}
                    </h2>
                    <p>
                        {{ __('about.about desc') }}
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="assets/img/new/main-img.jpeg" class="img-fluid" alt="">
                </div>
            </div>


            <br>
            <h2 class="h3 title_second">
                {{ __('about.Introduction_to_the_University:') }}
            </h2>
            <p>
                {{ __('about.The_European_Nile University_as_an_academic') }}
            </p>
            <br>
            <h2 class="h3 title_second">
                {{ __('about.accredited:') }}
            </h2>
            <p>
                {{ __('about.85320 - Technical and vocational secondary education.') }}
            </p>
            <p>
                {{ __('about.85410 - Non-tertiary higher secondary education.') }}
            </p>
            <p>
                {{ __('about.85421 - First-class higher education.') }}
            </p>
            <p>
                {{ __('about.85422 - Higher education at postgraduate level.') }}
            </p>
            <p>
                {{ __('about.The University adopts an online and urban education system.') }}
            </p>
            <p>
                {{ __('about.Nile European University was established out of the need ') }}
            </p>
            
            <p>
                {{ __('about.Therefore, the university seeks to') }}
            </p>

            <br>
            <h2 class="h3 title_second">
                {{ __('about.University message') }}
            </h2>
            <ol>
                <li>{{ __('about.Sophistication, excellence and building a') }}</li>
                <li>{{ __('about.Providing educational and training services of the highest quality.') }}</li>
                <li>{{ __('about.Providing the labor market with elements capable of dealing') }}</li>
            </ol>

            <br>
            <h2 class="h3 title_second">
                {{ __('about.Objectives') }}
            </h2>
            <ol>
                <li>{{ __('about.Nile European University aims to be') }}</li>
                <li>{{ __('about.Paying attention to university education at') }}</li>
                <li>{{ __('about.Qualifying students scientifically') }}</li>
                <li>{{ __('about.Updating and developing school curricula in') }}</li>
                <li>{{ __('about.Assisting large and start-up institutions') }}</li>
                <li>{{ __('about.Facilitate learning for students by') }}</li>
            </ol>

            <br>
            <h2 class="h3 title_second">
                {{ __('about.University Vision:') }}
            </h2>
            <p>
                {{ __('about.Nile European University seeks to be one') }}
            </p>

            <h2 class="h3 title_second">
                {{ __('about.University study system') }}
            </h2>
            <h5>{{ __('about.First: Nile European University is distinguished') }}</h5>

            <ol>
                <li>{{ __('about.Direct education at the main university ') }}</li>
                <li>{{ __('about.Remote study (online) through audio rooms with a system') }}</li>
                <li>{{ __('about.here is also open education, which allows') }}</li>
            </ol>
            <h5>{{ __('about.secondly:') }}</h5>
            <p>
                {{ __('about.The university relies for its teaching on the Arabic') }}
            </p>
            <h5>{{ __('about.Third: Academic years at the university:') }}</h5>
            <p>{{ __('about.The academic year consists of two semesters:') }}</p>
            <ol>
                <li>{{ __('about.The first semester: its duration is') }}</li>
                <li>{{ __('about.The second semester: its duration is from three') }}</li>
            </ol>
            <p>
                {{ __('about.Summer vacation, in which training programs are') }}
            </p>

            <h5>{{ __('about.Stop cuff the study') }}</h5>
            <p>
                {{ __('about.pulling out From Established or more:if Withdraw requester') }}
            </p>
            <p>
                {{ __('about.Can for the student that no Can tracking the study in') }}
            </p>
            <p>
                {{ __('about.not orphan Acceptance requester in Which') }}
            </p>

            <p>{{ __('about.stop cuff requester in the University if') }}</p>
            <p>{{ __('about.Can for the student arrested bind him') }}</p>
            <p>{{ __('about.Lifts boss Affairs the students the') }}</p>

            <h2 class="h3 title_second">
                {{ __('about.Entry conditions at university') }}
            </h2>

            <p>{{ __('about.Allows University Nile European admissions to study') }}</p>
            <h2 class="h3 title_second">
                {{ __("about.Bachelor's stage:") }}
            </h2>

            <p>{{ __('about.distance get requester on me high school') }}</p>


            <h2 class="h3 title_second">
                {{ __("about.Master's level:") }}
            </h2>
            <p>{{ __('about.crown the University Enrollment requester program') }}</p>

            <p>{{ __('about.no intervention Materials complementary for') }}</p>

            <p>{{ __('about.join requester year study complementary it') }}</p>
            <p>{{ __('about.and presents requester leaves the following to join') }}</p>

            <ol>
                <li>{{ __('about.picture certified From certificate BSC or Bachel') }}</li>
                <li>{{ __('about.a statement grades for years school Bachelor') }}</li>
            </ol>

            <p>{{ __('about.if It was advanced he have certificate BA') }}</p>

            <h2 class="h3 title_second">
                {{ __('about.PhD stage') }}
            </h2>

            <p>{{ __('about.crown the University Enrollment requester program PhD') }}</p>
            <p>{{ __('about.no intervention Materials complementary for the') }}</p>
            <p>{{ __('about.and presents requester leaves the following to join PhD') }}</p>
            <ol>
                <li>{{ __('about.picture certified From certificate BSC or') }}</li>
                <li>{{ __('about.picture certified From certificate Masters') }}</li>
                <li>{{ __('about.a statement grades per year introductory for master') }}</li>

            </ol>

            <h2 class="h3 title_second">{{ __('about.Entry clauses:') }} </h2>

            <ul class="list-group mb-4">
                <li class="list-group-item">{{ __('about.*for university right in addition any') }}</li>
                <li class="list-group-item">{{ __('about.Can for the student progress to join') }}</li>
                <li class="list-group-item">{{ __('about.*Gets requester enrolling at') }}</li>
            </ul>

            <h2 class="h3 title_second">{{ __('about.system of equations') }} </h2>

            <p>{{ __('about.The equivalency is for certificates or subjects studied a') }}</p>
            <ul class="list-group mb-4">
                <li class="list-group-item">{{ __('about.Transcripts submitted by the university in') }}</li>
                <li class="list-group-item">{{ __('about.A copy of the ID card (proof of identity, passport).') }}</li>
                <li class="list-group-item">{{ __('about.A recent photo of the student/e.') }}</li>
                <li class="list-group-item">{{ __('about.A photo of the last academic qualification.') }}</li>
            </ul>
            <p>{{ __('about.An equation can be made for the owners of') }}</p>

            <ul class="list-group mb-4">
                <li class="list-group-item">{{ __('about.A copy of the ID card (proof of identity).') }}</li>
                <li class="list-group-item">{{ __('about.A recent photo of the student.') }}</li>
                <li class="list-group-item">{{ __('about.A photo of the last academic qualification.') }}</li>
                <li class="list-group-item">{{ __('about.Any document that proves work and scientific experience.') }}</li>
                <li class="list-group-item">{{ __('about.Lectures, publications or scientific theses in') }}</li>
            </ul>
            <p>{{ __('about.The documents are presented to a special equivalency') }}</p>

            <h2 class="h3 title_second">{{ __('about.international conventions') }} </h2>
            <p>{{ __('about.Which displays the universitys agreements and protocols') }}</p>

            <h2 class="h3 title_second">{{ __('about.Promotions and scientific ranks:') }} </h2>

            <p>{{ __('about.Nile European University announces the opening of the door') }}</p>
            <ul class="list-group mb-4">
                <li class="list-group-item">{{ __('about.Where the university awards an honorary') }}</li>
                <li class="list-group-item">{{ __('about.grants the degree of professorship to the applicant') }}</li>
            </ul>
            <h2 class="h3 title_second">{{ __('about.Faculties and programs of the university') }} </h2>
            <p>{{ __('about.The university containsninetheoretical faculties; In addition') }}</p>
            <ul class="list-group mb-4 col-md-6">
                <li class="list-group-item">{{ __('about.Faculty of Educational Studies') }}</li>
                <li class="list-group-item">{{ __('about.Faculty of Economics and Financial Sciences') }}</li>
                <li class="list-group-item">{{ __('about.College of Sharia and Islamic Studies') }}</li>
                <li class="list-group-item">{{ __('about.Faculty of Law and Legal Studies') }}</li>
                <li class="list-group-item">{{ __('about.Faculty of Media and Foreign Languages') }}</li>
                <li class="list-group-item">{{ __('about.Faculty of Political Science and Diplomacy') }}</li>
                <li class="list-group-item">{{ __('about.Faculty of Arts and Humanities') }}</li>
                <li class="list-group-item">{{ __('about.College of Computers and Information') }}</li>
                <li class="list-group-item">{{ __('about.College of Artificial Intelligence') }}</li>

            </ul>
            <h2 class="h3 title_second">{{ __('about.University credits') }} </h2>

            <p>{{ __('about.The European Nile University was established as an academic and') }}</p>
            <p>{{ __('about.It is registered on the British government website via the link') }}</p>
            <a href="https://find-and-update.company-information.service.gov.uk/company/13751333">
                <p>https://find-and-update.company-information.service.gov.uk/company/13751333</p>
            </a>

            <p>{{ __('about.The university also depends The following education system:') }}</p>
            <p>{{ __('about.85320 - Technical and vocational secondary education.') }}</p>
            <p>{{ __('about.85410 - Post-secondary, non-higher education') }}</p>
            <p>{{ __('about.85421 - First Class Higher Education') }}</p>
            <p>{{ __('about.85,422 Higher education at the postgraduate level') }}</p>

            <h2 class="h3 title_second">{{ __('about.Other credits provided by the university (with additional fees):') }}
            </h2>
            <ul class="list-group mb-4 col-md-6">
                <li class="list-group-item">{{ __('about.British Commonwealth.') }}</li>
                <li class="list-group-item">{{ __('about.British solitaire.') }}</li>
                <li class="list-group-item">{{ __('about.British Apostille.') }}</li>
                <li class="list-group-item">{{ __('about.The students embassies.') }}</li>
                <li class="list-group-item">{{ __('about.British Foreign Office') }}</li>
                <li class="list-group-item">{{ __('about.Arab Chamber of Commerce in Britain') }}</li>
                <li class="list-group-item">{{ __('about.Egyptian Ministry of Foreign Affairs.') }}</li>
            </ul>

            <p>{{ __('about.Studying at the university includes a ba') }}</p>
            <h2 class="h3 title_second">{{ __('about.Credits that accredit university degrees:') }} </h2>

            <h5>{{ __('about.Commonwealth Foundation:') }}</h5>
            <p>{{ __('about.The Commonwealth Foundation is an intergovernmental') }}</p>
            <h5>{{ __('about.Commonwealth:') }}</h5>
            <p>{{ __('about.The UK supports the Commonwealths work') }}</p>
            <p>{{ __('about.The modern Commonwealth of Nations includes about') }}</p>
            <h5>{{ __('about.The number of member states in this British Commonwealth') }}</h5>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">{{ __('about.and the Bahamas') }}</th>
                        <th scope="col">{{ __('about.and Australia') }}</th>
                        <th scope="col">{{ __('about.and Barbuda') }}</th>
                        <th scope="col">{{ __('about.Antigua') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ __('about.and Kenya') }}</td>
                        <td>{{ __('about.Fiji') }}</td>
                        <td>{{ __('about.and Brunei') }}</td>
                        <td>{{ __('about.and Bangladesh') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.and Kiribati') }}</td>
                        <td>{{ __('about.Ghana') }}</td>
                        <td>{{ __('about.and Canada') }}</td>
                        <td>{{ __('about.and Barbados') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.And Lesotho') }}</td>
                        <td>{{ __('about.and Grenada') }}</td>
                        <td>{{ __('about.and Cyprus') }}</td>
                        <td>{{ __('about.Belize') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.and Malawi') }}</td>
                        <td>{{ __('about.and Jamaica') }}</td>
                        <td>{{ __('about.and Dominica') }}</td>
                        <td>{{ __('about.and Botswana') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.and Pakistan') }}</td>
                        <td>{{ __('about.and Nauru') }}</td>
                        <td>{{ __('about.and Namibia') }}</td>
                        <td>{{ __('about.Malaysia') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Papua New Guinea') }}</td>
                        <td>{{ __('about.and New Zealand') }}</td>
                        <td>{{ __('about.and Mauritius') }}</td>
                        <td>{{ __('about.and the Maldives') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Saint Kitts and Nevis') }}</td>
                        <td>{{ __('about.and Nigeria') }}</td>
                        <td>{{ __('about.and Mozambique') }}</td>
                        <td>{{ __('about.and Malta') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.and Singapore') }}</td>
                        <td>{{ __('about.Seychelles') }}</td>
                        <td>{{ __('about.and grenadine') }}</td>
                        <td>{{ __('about.Saint Lucia') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.and Solomon Islands') }}</td>
                        <td>{{ __('about.sierra leone') }}</td>
                        <td>{{ __('about.samoa') }}</td>
                        <td>{{ __('about.Saint Vincent') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.and Tobago') }}</td>
                        <td>{{ __('about.and Tonga') }}</td>
                        <td>{{ __('about.and Swaziland') }}</td>
                        <td>{{ __('about.Sri Lanka') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.and TUV') }}</td>
                        <td>{{ __('about.and Trinidad') }}</td>
                        <td>{{ __('about.and tanzania') }}</td>
                        <td>{{ __('about.and South Africa') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.and Zambia') }}</td>
                        <td>{{ __('about.Vanuatu') }}</td>
                        <td>{{ __('about.and the United Kingdom of Great Britain') }}</td>
                        <td>{{ __('about.and Uganda') }}</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h3 title_second">{{ __('about.British Apostille:') }} </h2>

            <p>{{ __('about.It  is  an  international  treaty  drafted  by  the') }}</p>

            <h5>{{ __('about.The signatory countries to the Apostille Convention') }}</h5>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">{{ __('about.Bulgaria') }}</th>
                        <th scope="col">{{ __('about.Bosnia and Herzegovina') }}</th>
                        <th scope="col">{{ __('about.Barbados') }}</th>
                        <th scope="col">{{ __('about.Andorra') }}</th>
                        <th scope="col">{{ __('about.Albania') }}</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ __('about.Burundi') }}</td>
                        <td>{{ __('about.Brazil ') }}</td>
                        <td>{{ __('about.Belarus') }}</td>
                        <td>{{ __('about.he two seas') }}</td>
                        <td>{{ __('about.Antigua.') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.green head') }}</td>
                        <td>{{ __('about.Botswana') }}</td>
                        <td>{{ __('about.Belgium ') }}</td>
                        <td>{{ __('about.Bahamas') }}</td>
                        <td>{{ __('about.Argentina.') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Chile') }}</td>
                        <td>{{ __('about.Brunei Darussalam') }}</td>
                        <td>{{ __('about.Belize') }}</td>
                        <td>{{ __('about.Azerbaijan') }}</td>
                        <td>{{ __('about.Armenia') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.China(Macau)') }}</td>
                        <td>{{ __('about.China(Hong Kong)') }}</td>
                        <td>{{ __('about.Bolivia') }}</td>
                        <td>{{ __('about.Austria') }}</td>
                        <td>{{ __('about.Australia') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Grenada') }}</td>
                        <td>{{ __('about.France') }}</td>
                        <td>{{ __('about.dominican republic') }}</td>
                        <td>{{ __('about.Cyprus') }}</td>
                        <td>{{ __('about.Colombia') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Germany') }}</td>
                        <td>{{ __('about.North Macedonia') }}</td>
                        <td>{{ __('about.Ecuador') }}</td>
                        <td>{{ __('about.Czech Republic') }}</td>
                        <td>{{ __('about.Cook Islands') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Greece') }}</td>
                        <td>{{ __('about.Finland') }}</td>
                        <td>{{ __('about.El Salvador') }}</td>
                        <td>{{ __('about.Denmark') }}</td>
                        <td>{{ __('about.Costa Rica') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Georgia') }}</td>
                        <td>{{ __('about.Fiji') }}</td>
                        <td>{{ __('about.Estonia') }}</td>
                        <td>{{ __('about.Dominica') }}</td>
                        <td>{{ __('about.Croatia') }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>{{ __('about.Venezuela') }}</td>
                        <td>{{ __('about.Uruguay') }}</td>
                        <td>{{ __('about.Guyana') }}</td>
                        <td>{{ __('about.Guatemala') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Vanuatu') }}</td>
                        <td>{{ __('about.Uzbekistan') }}</td>
                        <td>{{ __('about.United States of America') }}</td>
                        <td>{{ __('about.northern Ireland') }}</td>
                        <td>{{ __('about.United Kingdom of Great Britain') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Slovakia') }}</td>
                        <td>{{ __('about.Turkey.') }}</td>
                        <td>{{ __('about.Ukraine.') }}</td>
                        <td>{{ __('about.Trinidad') }}</td>
                        <td>{{ __('about.South') }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{ __('about.Africa') }}</td>
                    </tr>

                    <tr>
                        <td>{{ __('about.Tonga') }}</td>
                        <td>{{ __('about.Africa') }}</td>
                        <td>{{ __('about.Africa') }}</td>
                        <td>{{ __('about.Africa') }}</td>
                        <td>{{ __('about.Africa') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Tonga') }}</td>
                        <td>{{ __('about.Switzerland') }}</td>
                        <td>{{ __('about.Suriname') }}</td>
                        <td>{{ __('about.Singapore') }}</td>
                        <td>{{ __('about.Seychelles island.') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.and Sweden') }}</td>
                        <td>{{ __('about.Serbia') }}</td>
                        <td>{{ __('about.Slovenia') }}</td>
                        <td>{{ __('about.Spain') }}</td>
                        <td>{{ __('about.Tobago') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.India') }}</td>
                        <td>{{ __('about.Ireland') }}</td>
                        <td>{{ __('about.Iceland') }}</td>
                        <td>{{ __('about.Hungary') }}</td>
                        <td>{{ __('about.Honduras') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Marshall Islands') }}</td>
                        <td>{{ __('about.Lithuania') }}</td>
                        <td>{{ __('about.Latvia') }}</td>
                        <td>{{ __('about.Republic of Korea(South Korea)') }}</td>
                        <td>{{ __('about.phalastin') }}</td>
                    </tr>
                    <tr>

                        <td>{{ __('about.Mauritius') }}</td>
                        <td>{{ __('about.Luxembourg.') }}</td>
                        <td>{{ __('about.Lesotho') }}</td>
                        <td>{{ __('about.Kosovo.') }}</td>
                        <td>{{ __('about.Italia.') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Mexico') }}</td>
                        <td>{{ __('about.Malawi') }}</td>
                        <td>{{ __('about.Liberia.') }}</td>
                        <td>{{ __('about.Kyrgyzstan') }}</td>
                        <td>{{ __('about.Jamaica') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Monaco') }}</td>
                        <td>{{ __('about.Malta') }}</td>
                        <td>{{ __('about.Liechtenstein') }}</td>
                        <td>{{ __('about.Kazakhstan') }}</td>
                        <td>{{ __('about.Japan') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Holland') }}</td>
                        <td>{{ __('about.Niue') }}</td>
                        <td>{{ __('about.Norway') }}</td>
                        <td>{{ __('about.Nicaragua') }}</td>
                        <td>{{ __('about.Mongolia') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Morocco') }}</td>
                        <td>{{ __('about.Namibia') }}</td>
                        <td>{{ __('about.Amman') }}</td>
                        <td>{{ __('about.New Zealand.') }}</td>
                        <td>{{ __('about.Montenegro.') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Romania') }}</td>
                        <td>{{ __('about.Republic of Moldova.') }}</td>
                        <td>{{ __('about.Poland.') }}</td>
                        <td>{{ __('about.Peru.') }}</td>
                        <td>{{ __('about.Panama.') }}</td>
                    </tr>
                    <tr>

                        <td>{{ __('about.Saint Kitts and Nevis') }}</td>
                        <td>{{ __('about.Russian Federation') }}</td>
                        <td>{{ __('about.Portugal.') }}</td>
                        <td>{{ __('about.The Philippines.') }}</td>
                        <td>{{ __('about.Paraguay.') }}</td>
                    </tr>


                    <tr>
                        <td>{{ __('about.and Principe') }}</td>
                        <td>{{ __('about.Swaziland') }}</td>
                        <td>{{ __('about.Samoa.') }}</td>
                        <td>{{ __('about.Tajikistan') }}</td>
                        <td>{{ __('about.Saint Lucia.') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.Tunisia') }}</td>
                        <td>{{ __('about.Sao Tome') }}</td>
                        <td>{{ __('about.San') }}</td>
                        <td></td>
                        <td>{{ __('about.Saint') }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>{{ __('about.Marino') }}</td>
                        <td>{{ __('about.Grenadines') }}</td>
                        <td>{{ __('about.Vincent') }}</td>
                    </tr>


                </tbody>
            </table>
            <h2 class="h3 title_second">{{ __('about.Accreditation service for international colleges') }} </h2>
            <p>{{ __('about.Accreditation service for international') }}</p>
            <p>{{ __('about.In 2009, the International Colleges Accreditation') }}</p>
            <p>{{ __('about.In 2013, in cooperation with the British Embassy') }}</p>
            <p>{{ __('about.Currently, there are more than 260 universities') }}</p>
            <h2 class="h3 title_second">{{ __('about.Accreditation in the Arab world:') }} </h2>
            <h2 class="h3 title_second">{{ __('about.Kingdom Saudi Arabia:') }} </h2>

            <p>{{ __('about.Jazan University suggested to the advisory body') }}</p>
            <p>{{ __('about.The Republic of Iraq:') }}</p>
            <p>{{ __('about.Likewise, the University of Tikrit in Iraq obtained th') }}</p>
            <h2 class="h3 title_second">{{ __('about.Switzerland') }} </h2>

            <p>{{ __('about.And the Swiss Open University') }}</p>
            <h2 class="h3 title_second">{{ __('about.Kuwait') }} </h2>
            <p>{{ __('about.and the European College in Kuwait.') }}</p>

            <h2 class="h3 title_second">{{ __('about.To whom') }} </h2>

            <p>{{ __('about.And Limkok Wing University of Creative') }}</p>
            <h2 class="h3 title_second">{{ __('about.Cairo:') }} </h2>
            <p>{{ __('about.Today, Dr. Mohamed Othman Elkhosht') }}</p>
            <p>{{ __('about.Accreditation service for international colle') }}</p>


            <ul class="list-group mb-4">
                <li class="list-group-item">{{ __('about.European Association for Quality Assu') }}</li>
                <li class="list-group-item">{{ __('about.European Distance and E-learning Network EDEN') }}</li>
                <li class="list-group-item">{{ __('about.Council for Higher Education AccreditationThe Higher') }}</li>
                <li class="list-group-item">{{ __('about.NAFSA: Association of International Educators') }}</li>
                <li class="list-group-item">{{ __('about.British Quality Foundation (BQF)') }}</li>
                <li class="list-group-item">{{ __('about.United nationsAcademy Impact group') }}</li>
                <li class="list-group-item">{{ __('about.Association of International Education Administrators (AIEA)') }}</li>
                <li class="list-group-item">{{ __('about.Institute of Enterprise and Entrepreneurship (IoEE)') }}</li>
                <li class="list-group-item">{{ __('about.GUIDE Association, Global Universities in Distance Education') }}</li>
                <li class="list-group-item">{{ __('about.The Gulf Education Conference') }}</li>
            </ul>

            <h2 class="h3 title_second">{{ __('about.Organizational Chart') }} </h2>
            <table class="table table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">{{ __('about.University Council') }}</th>
                        <th scope="col">{{ __('about.Administ rative departments') }}</th>
                        <th scope="col">{{ __('about.academic affairs') }}</th>
                        <th scope="col">{{ __('about.Scientific Research') }}</th>
                        <th scope="col">{{ __('about.Students Affairs') }}</th>
                        <th scope="col">{{ __('about.faculty of school') }}</th>
                        <th scope="col">{{ __('about.University services societal') }}</th>
                        <th scope="col">{{ __('about.University faculties') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ __('about.Universitys president') }}</td>
                        <td>{{ __('about.Legala dvice') }}</td>
                        <td>{{ __('about.Colleges and institutes') }}</td>
                        <td>{{ __('about.research regulati ons') }}</td>
                        <td>{{ __('about.Student Services') }}</td>
                        <td>{{ __('about.Services and facilities') }}</td>
                        <td>{{ __('about.Units and Centers') }}</td>
                        <td>{{ __('about.university news') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('about.VicePresident of the University') }}</td>
                        <td>{{ __('about.financial affairs') }}</td>
                        <td>{{ __('about.University decisions') }}</td>
                        <td>{{ __('about.research projects') }}</td>
                        <td>{{ __('about.Expatriate Services') }}</td>
                        <td>{{ __('about.upgrades') }}</td>
                        <td>{{ __('about.General project management') }}</td>
                        <td>{{ __('about.News colleges') }}</td>

                    </tr>
                    <tr>
                        <td>{{ __('about.Board of Trustees') }}</td>
                        <td>{{ __('about.Communication and info') }}</td>
                        <td>{{ __('about.Postgraduate Programs') }}</td>
                        <td>{{ __('about.Scientific Journals') }}</td>
                        <td>{{ __('about.Student Activities') }}</td>
                        <td>{{ __('about.Travel and cultural exchange') }}</td>
                        <td>{{ __('about.recruitment unit') }}</td>
                        <td>{{ __('about.Important events') }}</td>

                    </tr>
                    <tr>
                        <td>{{ __('about.Deans of colleges') }}</td>
                        <td>{{ __('about.Personnel Affairs') }}</td>
                        <td>{{ __('about.Undergraduate programs') }}</td>
                        <td>{{ __('about.Libraries') }}</td>
                        <td>{{ __('about.Scholarships and training') }}</td>
                        <td>{{ __('about.Member profile') }}</td>
                        <td>{{ __('about.Activities and Events') }}</td>
                        <td>{{ __('about.statistics') }}</td>

                    </tr>
                    <tr>
                        <td></td>
                        <td>{{ __('about.General supervision of departments') }}</td>
                        <td>{{ __('about.Academic Services') }}</td>
                        <td>{{ __('about.Scientific Research Awards') }}</td>
                        <td>{{ __('about.Student care and safety') }}</td>
                        <td>{{ __('about.safety and health') }}</td>
                        <td></td>
                        <td>{{ __('about.protocols') }}</td>
                    </tr>

                </tbody>
            </table>



        </div>
    </section>
@endsection
