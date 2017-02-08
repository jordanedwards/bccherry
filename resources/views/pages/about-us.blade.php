@extends('layouts.post', [
    'title' => 'BC Cherry Association',
    'header' => 'About us',
    'footer' => 'dark',
    'side_menu' => 'association'
])

@section('header-styles')

@stop

@section('content')

    <article class="post-entry">

        <header class="post-header">
            <h2 class="post-title">About us</h2>
        </header>

        <section class="white-bg">

            <div class="row">
                <div class="col-sm-12 content">
                    <header class="post-header">
                        <ul class="post-meta small">
                            <li><i class="fa fa-calendar"></i><a href="#">26 October 2016</a></li>
                            <li><i class="fa fa-folder-open-o"></i><a href="#">Cherry info</a></li>
                        </ul>
                    </header>
                </div>
            </div>

            <div class="row">
                <div class="content">
                    <div class="pf-content"><p>Formerly called the Okanagan Kootenay Cherry Growers' Association
                            (OKCGA), the organization was formed in 1998 by a small group of cherry growers seeking to
                            pool financial resources to increase research and development of cherry production in the
                            region. Through a voluntary contribution of a penny per pound from each grower, significant
                            gains have been made - not just in research, but in other areas, such as minor use pesticide
                            registration, orchard and employment issues, and forums for growers. Since inception, annual
                            grower contributions, partnered with provincial and federal programs, have enabled five or
                            six priority research projects annually - working with the Pacific Agriculture Research
                            Centre (PARC) and other researchers and consultants.</p>
                        <p>The executive contribute many hours on other matters, such as chemical registration,
                            communication of horticultural information, field days and forums. In recent years the
                            organization has broadened it scope to address trade and market access and development
                            issues - to keep ahead of the major increases in production. The Board has two major
                            committees - Research and Development, and Market Access and Promotion. Each of these
                            committees includes growers and other specialists and industry stakeholders - providing the
                            experience and knowledge to prioritize the issues and guide the work to be done.</p>
                        <p>Other services to members include an online horticultural forum, orchard listings for
                            employment, classified advertising, and marketing directory to help buyers of all kinds find
                            the fruit they are looking for.</p>
                        <p>Growers are strongly urged to join and contribute the annual research levy to enable the BCCA
                            to do even more work in the future. Print out and mail in the attached membershipform.</p>
                        <p>Research Projects conducted in the last few years are listed below. Related reports are
                            available in full in the Members' Area.<br>
                            (2012) Postharvest Cold and CO2 Treatments, P. Toivonen<br>
                            (2012) NC140 Trials, Drought Management, Nielsen<br>
                            (2012) Cull Management for SWD, T Richardson<br>
                            (2012) CO2 and Cold Treatment for SWD Control, T. Richardson<br>
                            (2012) Powdery Mildew Control, D Hirkala<br>
                            (2012) Fruit Waste Utilization, D. Zbeetnof<br>
                            (2012) Starling Population Control<br>
                            (2011) Powdery Mildew Control, D Holder and D Hirkala<br>
                            (2011) SWD Treatments T Richardson<br>
                            (2011) SWD Cull Pile Control, G White<br>
                            (2011) Post Harvest Temperature and CO2 Effects, P. Toivenen<br>
                            (2011) NC 140 Training and Rootstock Trials D&amp;G Nielsen(2011) Irrigation and Crop Load
                            Studies for Coping with Drought D &amp; G Nielsen<br>
                            (2011) Starling Population Control J Neuhauser<br>
                            (2010) Spotted Wing Drosophila Similkameen Monitoring and Trap Trials L. Edwards, T.
                            Richardson<br>
                            (2010) Spotted Wind Drosophila Project OVTFA, MAFF<br>
                            (2010) Maturity and Post Harvest Research P. Toivenen<br>
                            (2010) NC140 Trials D Nielsen<br>
                            (2010) IPM of Wasps in Sweeth Cherries D. Holder<br>
                            (2010) Powdery Mildew Control D. Holder<br>
                            (2009) IPM of Wasps in Sweet Cherries D. Holder<br>
                            (2008) Increasing the Efficacy of Generic GA: G. Hogue<br>
                            (2008) Cherry response to Management Treatments and Tree Effects from Spray Applications: D&amp;G
                            Neilson<br>
                            (2008) Evaluation of Pest Management Practices: D. Holder<br>
                            (2008) Paper Wasp Study: D. Holder<br>
                            (2008) Assessing Industry Readiness for Extending Storage and Shipping: P. Toivonen<br>
                            (2007) Cherry response to Management Treatment: D &amp; G Neilsen<br>
                            (2007) Fungicide Use and Residue Testing: D Holder<br>
                            (2007) Management Practices and Changing Insecticide Use: D.Holder<br>
                            (2007) Tree Effects From Spray Applications: G&amp;D Neilsen<br>
                            (2007) Increasing Efficacy of Generic G.A G.Hogue<br>
                            (2007) Post Harvest Hot Water Treatment: P. Scholberg<br>
                            (2006/7) Control of Bacterial Canker: P. Scholberg<br>
                            (2006) Increasing Efficacy of GA: G Hogue<br>
                            (2006) Cherry Storage: C Lu<br>
                            (2006) Variations in Response to Management Treatments: G Neilsen<br>
                            (2006) Control of Bacterial Canker in Nursery Trees: P Scholberg<br>
                            (2006) Managing Insects Under Changing Insecticide Use: D Holder<br>
                            (2006) Fungicide Use and Residue Study: D. Holder<br>
                            (2006) Alternatives for IPM of cherry fruit flies: H. Thistlewood<br>
                            (2005) Control of Cherry Powdery Mildew and Postharvest Rots: Dr. P. Scholberg<br>
                            (2005) Nutritional Factors: Dr. G Neilsen<br>
                            (2005) Pesticide Monitoring: D. Holder<br>
                            (2005) Evaluation of Generic Giberrellic Acid: Dr. E Hogue<br>
                            (2005) Microbiological quality of hydro-cooler water in cherry packing plants and evaluation
                            of alternative sanitizers: Dr. P Delaquis<br>
                            (2004) Cherry Fruit Fly Control with GF-120 NF Bait<br>
                            (2004) Development of a disease monitoring model for cherry powdery mildew � Progress Report
                            2004<br>
                            (2003) Falconry Bird Control for Cherry Crop Protection<br>
                            (2003) Control of Post-harvest Rots and Epidemiology of Cherry Powdery Mildew<br>
                            (2003) Evaluation of Generic Gibberellic Acid for Registration in Sweet Cherries<br>
                            (2002) Nutritional factors associated with harvest quality and post harvest longevity of
                            sweet cherry<br>
                            (2002) The Dispersal of the Western cherry fruit fly R. indifferens (Diptera: Tephritidae)
                            in Structured Environments</p>
                    </div>
                </div>
            </div>

        </section>

    </article>

@endsection
