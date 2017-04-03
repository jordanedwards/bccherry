<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>

    @include('includes.head')

    <style>
        .odd {
            background: #ccc;
        }

        .directory-listing {
            margin: 5px;
            padding: 10px;
        }

        label {
            margin-bottom: 0px;
        }

        .orchardname {
            font-size: 1.4em;
        }
    </style>
    <style>
        .member_name {
            font-size: 1.2em;
            color: #A21418;
            text-decoration: none;
        }
        .directory-listing:nth-child(even) {background: #CCC}
        blockquote {
            background: none;
        }
    </style>

    @yield('header-styles')

</head>

<body class="inner-page">

@include('includes.navbar')

<section class="white-bg padding-top-bottom">

    <div class="container">

        <div class="row">

            <div id="single-post" class="col-sm-8">

                <article class="post-entry">

                    <header class="post-header">
                        <h2 class="post-title">Sales Directory</h2>

                    </header>

                    <div class="listings">

                        @foreach($members as $member)

                            <div class="directory-listing row">
                                {{--<div class="col-md-4"><a href="#">--}}
                                        {{--<img src="images/logos/cfp.png" class="img-responsive"--}}
                                             {{--alt="Consolidated Fruit Packers Ltd." title="Consolidated Fruit Packers Ltd."></a>--}}
                                {{--</div>--}}
                                <div class="col-md-8">
                                    <div><span class="member_name">{{ $member->name }}</span></div>
                                    <div><label>Address:</label> {{ $member->fullAddress() }}</div>
                                    <div><label>Orchard Website:</label> <a href="{{ $member->sales_website }}">{{ $member->website }}</a> </div>
                                    <div><label>Sales Phone:</label> {{ $member->sales_phone }}</div>
                                    <div><label>Sales Email:</label> <a href="mailto: {{ $member->sales_email }}">{{ $member->sales_email }}</a> </div>
                                    <div><label>Certifications:</label> {{ $member->getCertifications('string') }}</div>
                                    <div><label>Sales Agent: :</label> {{ $member->sales_agent }}</div>
                                    <div><label>Fruit Available by:</label> {{ $member->distribution_type }} </div>
                                    <div><label>Varieties:</label> {{ $member->getVarieties('string') }} </div>

                                    @if($member->harvest_weeks != "")
                                    <div><label>Harvest:</label>
                                        <blockquote>
                                        <?php $harvest_weeks = explode("|", $member->harvest_weeks) ?>
                                        @foreach($harvest_weeks as $harvest)
                                            {{ $harvest }}<br>
                                        @endforeach
                                        </blockquote>
                                    </div>
                                    @endif

                                </div>
                            </div>

                        @endforeach

                    {{ $members->links() }}

                    {{--<div class="directory-listing even cf row">--}}
                            {{--<div class="col-md-4"><a href="#">--}}
                                    {{--<img src="images/logos/cfp.png" class="img-responsive"--}}
                                         {{--alt="Consolidated Fruit Packers Ltd." title="Consolidated Fruit Packers Ltd."></a>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a--}}
                                                {{--href="#">Consolidated Fruit Packers Ltd.</a></span></div>--}}
                                {{--<div><label>Orchard Website:</label> <span class="value">www.cfp-ltd.ca</span></div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">bryank@cfp-ltd.ca</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value"> Canada GAP</span></div>--}}
                                {{--<div><label>Sales Agent: :</label> <span--}}
                                            {{--class="value">CFP is a packer and marketer</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value"> Direct</span></div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V1Y9S4</span></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="directory-listing odd cf row">--}}
                            {{--<div class="col-md-4"><a href="#"><img src="images/logos/coral-beach.png"--}}
                                                                   {{--class="img-responsive"--}}
                                                                   {{--alt="Coral Beach Farms | Jealous Fruits Ltd."--}}
                                                                   {{--title="Coral Beach Farms | Jealous Fruits Ltd."></a>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Coral Beach Farms | Jealous Fruits Ltd.</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">16351 Carr's Landing Road Lake Country BC Canada V4V 1A9</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">250-766-5393</span></div>--}}
                                {{--<div><label>Orchard Website:</label> <span class="value">www.coralbeach.ca || www.jealousfruits.com</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">info@jealousfruits.com</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value">Global GAP,  Environmental Farm Plan</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Sales Agent: :</label> <span class="value">Jealous Fruits</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value"> Direct</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2661" class="directory-listing even cf row">--}}
                            {{--<div class="col-md-4"><a href="#" class="img-responsive"><img--}}
                                            {{--src="images/logos/global-fruit.png" class="img-responsive"--}}
                                            {{--alt="Global Fruit" title="Global Fruit"></a></div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Global Fruit</a></span></div>--}}
                                {{--<div><span class="value">PO Box 155 Creston BC V0B 1G0</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">1 250-428-2320  or  1-866-428-2320 (toll free N.A.)</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Orchard Website:</label> <span class="value">globalfruit.org</span></div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">info@globalfruit.org</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value">Global GAP,  Canada GAP</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2658" class="directory-listing odd cf row">--}}
                            {{--<div class="col-md-4"><a href="#"><img src="images/logos/graem-nelson.png"--}}
                                                                   {{--class="img-responsive"--}}
                                                                   {{--alt="Graem Nelson and Associates"--}}
                                                                   {{--title="Graem Nelson and Associates"></a></div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Graem Nelson and Associates</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">250 Marina Way Suite 103 Penticton BC V2A 1H5</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">1.250.276.4849  </span></div>--}}
                                {{--<div><label>Fax Number:</label> <span class="value"> 1.250.276.3424</span></div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">graem@gnal.ca</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value">Global GAP,  Canada GAP</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2795" class="directory-listing even cf row">--}}
                            {{--<div class="col-md-4"><a href="#"><img width="150" height="150"--}}
                                                                   {{--src="images/logos/sutherland.jpg"--}}
                                                                   {{--class="img-responsive" alt="Sutherland SA Produce"--}}
                                                                   {{--title="Sutherland SA Produce"></a></div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a--}}
                                                {{--href="#">Sutherland SA Produce</a></span></div>--}}
                                {{--<div><label>Orchard Website:</label> <span class="value">www.lapincherry.com</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">Rick@LapinCherry.com</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value">Global GAP</span></div>--}}
                                {{--<div><label>Sales Agent: :</label> <span class="value">Sutherland S.A. Produce Inc. is a Broker also in partnership and representing BC  Tree Fruits (Canada’s Largest Fruit Cooperative) for export cherries.</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2135" class="directory-listing odd cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Beulah Orchards</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">6292 Hillborn Street Summerland BC Canada V0H 1Z7</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value">Global GAP,  Environmental Farm Plan</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Sales Agent: :</label> <span--}}
                                            {{--class="value">Graem Nelson and Associates</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="directory-listing even cf row">--}}
                            {{--<div class="col-md-4"><a href="#"><img src="images/logos/sweet-diamond.png"--}}
                                                                   {{--class="img-responsive"--}}
                                                                   {{--alt="Carcajou Fruit Company Ltd."--}}
                                                                   {{--title="Carcajou Fruit Company Ltd."></a></div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Carcajou Fruit Company Ltd.</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">16218 Garnet Valley Road Summerland BC V0H 1Z3</span></div>--}}
                                {{--<div><label>Orchard Website:</label> <span class="value">carcajoufruit.com</span></div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">graem@gnal.ca</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value">Global GAP,  Environmental Farm Plan</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Sales Agent: :</label> <span--}}
                                            {{--class="value">Graem Nelson and Associates</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker</span></div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V0H1Z3</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2131" class="directory-listing odd cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Danninger Orchards</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">449 Parsons Road Okanagan Falls BC Canada V0H 1R5</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">250-497-6539</span></div>--}}

                                {{--<div><label>Fax Number:</label> <span class="value">250-497-6539</span></div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">danninger-orchards@telus.net</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Certifications:</label> <span class="value"> Canada GAP</span></div>--}}
                                {{--<div><label>Sales Agent: :</label> <span class="value">Broker</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker</span></div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V0H1R5</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2127" class="directory-listing even cf row">--}}
                            {{--<div class="col-md-4"><a href="#"><img src="images/logos/morning-glory.jpg"--}}
                                                                   {{--class="img-responsive" alt="Dendy Orchards Ltd."--}}
                                                                   {{--title="Dendy Orchards Ltd."></a></div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Dendy Orchards Ltd.</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">3700 Pooley Road Kelowna BC Canada V1W 4G9</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">778-478-3507    </span></div>--}}
                                {{--<div><label>Fax Number:</label> <span class="value">778-478-3508</span></div>--}}
                                {{--<div><label>Orchard Website:</label> <span class="value">www.dendy.ca</span></div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">info@dendy.ca</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value"> Canada GAP</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker,  Direct,  Fruit Stand</span>--}}
                                {{--</div>--}}
                                {{--<div class="field-value wpbdp-field-employmentdescription meta "><label>Employment--}}
                                        {{--Description:</label> <span class="value">August 6th: Currently looking for 6 people to work in the Packinghouse until the end of harvest. Hourly wage. </span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2799" class="directory-listing odd cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Duarte Orchards Ltd</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">5524 Chokecherry Lane Oliver BC V0H 1T1</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">250-498-3516</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value"> Environmental Farm Plan,  Canada GAP</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Sales Agent: :</label> <span class="value">broker, direct</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker,  Direct</span></div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V0H1T1</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2157" class="directory-listing even cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a--}}
                                                {{--href="#">Elephant Island Orchards</a></span></div>--}}
                                {{--<div><span class="value">2730 Aikens Loop, Naramata, BC V0H 1N1</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">250 496 5506</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value">Global GAP</span></div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V0H1N1</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2128" class="directory-listing odd cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Faynor Orchards Ltd.</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">110-33rd Avenue S. Creston BC Canada V0B 1G1</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">250-428-7359</span></div>--}}
                                {{--<div><label>Orchard Website:</label> <span class="value">www.faynor.com</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value">Global GAP</span></div>--}}
                                {{--<div><label>Sales Agent: :</label> <span class="value">Global Fruit </span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker</span></div>--}}
                                {{--<div class="field-value wpbdp-field-employmentdescription meta "><label>Employment--}}
                                        {{--Description:</label> <span class="value">Tenting area with BBQ, fridges, power and hot showers</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2160" class="directory-listing even cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">G.P. Sandher Holdings Ltd.</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">1610 Swainson Road Kelowna BC Canada V1P 1C5</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">250-765-9471</span></div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">billsandher@hotmail.com</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Certifications:</label> <span class="value">Global GAP</span></div>--}}
                                {{--<div><label>Sales Agent: :</label> <span class="value">Global Fruit Brokers</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="directory-listing odd cf row">--}}
                            {{--<div class="col-md-4"><a href="#"><img src="images/logos/gatzke.png" class="img-responsive"--}}
                                                                   {{--alt="Gatzke Farm Market" title="Gatzke Farm Market"></a>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Gatzke Farm Market</a></span>--}}
                                {{--</div>--}}
                                {{--<div>--}}
                                    {{--<span class="value">Corner of Pelmewash Parkway and Irvine Rd Oyama BC V4V 2J2</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">250-868-7646</span></div>--}}
                                {{--<div><label>Orchard Website:</label> <span class="value">gatzkeorchard.com</span></div>--}}
                                {{--<div><label>Sales Agent: :</label> <span class="value">Gatzke Farm Market</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value"> Direct,  Fruit Stand,  U-Pick</span>--}}
                                {{--</div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V4V252</span></div>--}}
                                {{--<div class="field-value wpbdp-field-employmentdescription meta "><label>Employment--}}
                                        {{--Description:</label> <span class="value">Other jobs include work in bakery, cafe, weddings, music events and gardening.  </span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="directory-listing even cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Jobst-Hof Orchard</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">15438 Old Mission Road Oyama BC Canada V4V 2G5</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">250-548-4056</span></div>--}}
                                {{--<div><label>Orchard Website:</label> <span class="value">jobsthof.ca</span></div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">jobsthof@shaw.ca</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value"> Environmental Farm Plan</span>--}}
                                {{--</div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V4V2G5</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="directory-listing odd cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Kalwood Farms</a></span></div>--}}
                                {{--<div><span class="value">16012 Oyama Road Oyama BC V4V 2E4</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value">Global GAP</span></div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V4V2E4</span></div>--}}
                                {{--<div class="field-value wpbdp-field-employmentdescription meta "><label>Employment--}}
                                        {{--Description:</label> <span class="value">Harvest dates approximately July 15-August 20</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="directory-listing even cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Kato Orchards</a></span></div>--}}
                                {{--<div><span class="value">1170 Smethurst Road Naramata BC</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">250-496-5274</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="directory-listing odd cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a--}}
                                                {{--href="#">Laughing Coyote Orchards Ltd.</a></span></div>--}}
                                {{--<div><span class="value">Summerland, BC</span></div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">Rick@lapincherry.com</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value"> Canada GAP</span></div>--}}
                                {{--<div><label>Sales Agent: :</label> <span--}}
                                            {{--class="value">Sutherland S.A. Produce Inc.</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker</span></div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V0H1Z3</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="directory-listing even cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a--}}
                                                {{--href="#">Northern Cherries Inc.</a></span></div>--}}
                                {{--<div><span class="value">4564 Highway 97 Oliver, BC V0H1T1</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value">Global GAP</span></div>--}}
                                {{--<div><label>Sales Agent: :</label> <span class="value">Global Fruit Brokers</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="directory-listing odd cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Ocean Fruit Inc.</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">2940 McCulloch Rd</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">1-800-710-5870</span></div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V1W4A5</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="directory-listing even cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Quiet Valley Farms</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">2809 Erickson Road Creston BC Canada V0B 1G1</span></div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">qvfarms@hotmail.ca</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value">Global GAP</span></div>--}}
                                {{--<div class="field-value wpbdp-field-employmentdescription meta "><label>Employment--}}
                                        {{--Description:</label> <span class="value">Approximately 18 days of picking between from July 12 to 31 for the 2016 season.</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2862" class="directory-listing odd cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Rosewood Orchard</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">1815 Erickson Road  Creston BC  V0B 1G3</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value"> Canada GAP</span></div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V0B1G3</span></div>--}}
                                {{--<div class="field-value wpbdp-field-employmentdescription meta "><label>Employment--}}
                                        {{--Description:</label> <span--}}
                                            {{--class="value">Picking in late July and early August</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2855" class="directory-listing even cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Sandhu Fruit Farm</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">7311 Hillborn Street Summerland BC V0H1Z7</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">250 - 328 - 3618 </span></div>--}}
                                {{--<div><label>Fax Number:</label> <span class="value">250 - 494 - 9076 </span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value"> Canada GAP</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker,  Direct,  Fruit Stand</span>--}}
                                {{--</div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V0H1Z7</span></div>--}}
                                {{--<div class="field-value wpbdp-field-employmentdescription meta "><label>Employment--}}
                                        {{--Description:</label> <span class="value">Picking positions available </span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2162" class="directory-listing odd cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Sproule & Sons Farm</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">4590 Allison Rd Oyama BC Canada V4V 2B8</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">250 548 3387</span></div>--}}
                                {{--<div><label>Fax Number:</label> <span class="value">250 548 3853</span></div>--}}
                                {{--<div><label>Orchard Website:</label> <span class="value">sproulesredbarn.com</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">info@sproulesredbarn.com</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Certifications:</label> <span class="value"> BC Certified Organic</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Sales Agent: :</label> <span class="value">Direct, Farmers' Markets</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value"> Direct</span></div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V4V 2B8</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2161" class="directory-listing even cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Sun City Cherries</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">4759 Lakeshore Rd., Kelowna BC Canada V1W 4H6</span></div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">suncitycherries@shaw.ca</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Certifications:</label> <span class="value">Global GAP</span></div>--}}
                                {{--<div><label>Sales Agent: :</label> <span class="value">Broker; Direct</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value">Broker,  Direct,  Fruit Stand,  U-Pick</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2800" class="directory-listing odd cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Sun Valley Farm</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">2626 Middle Bench Keremeos BC V0X 1N2</span></div>--}}
                                {{--<div><label>Orchard Website:</label> <span class="value">sunvalleyfarm.ca</span></div>--}}
                                {{--<div><label>Certifications:</label> <span class="value"> BC Certified Organic</span>--}}
                                {{--</div>--}}
                                {{--<div><label>Sales Agent: :</label> <span class="value">direct</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value"> Farmer\'s  Market</span>--}}
                                {{--</div>--}}
                                {{--<div class="field-value wpbdp-field-postalcode meta "><label>Postal Code:</label> <span--}}
                                            {{--class="value">V0X1N2</span></div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div id="wpbdp-listing-2132" class="directory-listing even cf row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="orchardname"><span class="value"><a href="#">Valley Orchards and Hillcrest Market</a></span>--}}
                                {{--</div>--}}
                                {{--<div><span class="value">605 Bal Place Kelowna BC Canada V1X 8E8</span></div>--}}
                                {{--<div><label>Business Phone:</label> <span class="value">250-868-7082</span></div>--}}
                                {{--<div><label>Fax Number:</label> <span class="value">250 491 1951</span></div>--}}
                                {{--<div><label>Sales Email:</label> <span class="value">valleyorchards@shaw.ca</span></div>--}}
                                {{--<div><label>Sales Agent: :</label> <span class="value">Direct</span></div>--}}
                                {{--<div><label>Fruit Available by:</label> <span class="value"> Direct,  Fruit Stand</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="wpbdp-pagination">--}}
                            {{--<span class="prev"></span>--}}
                            {{--<span class="next"></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                </article>

            </div>

            <div id="main-sidebar" class="col-sm-4">

                <div class="widget">

                    <form id="search-form" novalidate>

                        <div class="form-group">
                            <div class="controls">
                                <input id="search-term" name="searchTerm" placeholder="Search" class="form-control input-lg" type="text">
                            </div>
                        </div><!-- End name input -->

                        <p class="text-center">
                            <button id="member-search"><i class="fa fa-search"></i></button>
                        </p>

                    </form><!-- End search-form -->

                </div>

                <div class="widget">

                    <h4 class="widget-title">Filters</h4>

                    <ul>
                        <li>
                            <select name="variety" class="form-control filter">
                                <option value="">Cherry Types</option>
                                @foreach($cherries as $cherry)
                                    <option value="{{ $cherry->id }}">- {{ $cherry->name }}</option>
                                @endforeach
                            </select>
                        </li>
                        <li><select name="harvest" class="form-control filter">
                                <option value="">Harvest Week</option>
                                @foreach($harvestWeeks as $harvest)
                                    <option value="{{ $harvest->week }}">- {{ $harvest->week }}</option>
                                @endforeach
                            </select></li>
                        <li><select name="city" class="form-control filter">
                                <option value="">Farm Location</option>
                                <option value="Oliver">Oliver/Osoyoos</option>
                                <option value="Osoyoos">Osoyoos</option>
                                <option value="Okanagan Falls">Okanagan Falls</option>
                                <option value="Naramata">Naramata</option>
                                <option value="Summerland">Summerland</option>
                                <option value="Peachland">Peachland</option>
                                <option value="Kelowna">Kelowna</option>
                                <option value="Lake Country">Lake Country</option>
                                <option value="Oyama">Oyama</option>
                                <option value="Grand Forks">Grand Forks</option>
                                <option value="Creston">Creston</option>
                                <option value="Penticton">Penticton</option>
                                <option value="Keremeos">Cawston - Keremeos</option>
                                <option value="Rock Creek">Rock Creek</option>
                                <option value="Vernon">Vernon</option>
                                <option value="Salmon Arm">Salmon Arm</option>
                            </select>
                        </li>
                        <li><select name="certification" class="form-control filter">
                                <option value="">Orchard Certifications</option>
                            @foreach($certifications as $certification)
                                    <option value="{{ $certification->id }}">- {{ $certification->name }}</option>
                                @endforeach
                                {{--<option value="">Orchard Certifications</option>--}}
                                {{--<option value="Global GAP">Global GAP</option>--}}
                                {{--<option value="Canada GAP">Canada GAP</option>--}}
                                {{--<option value="Environmental Farm Plan">Environmental Farm Plan</option>--}}
                            </select></li>
                        {{--<li><select name="feat" class="form-control">--}}
                                {{--<option value="">Orchard Features</option>--}}
                                {{--<option value="Cafe / Restaurant">Cafe / Restaurant</option>--}}
                                {{--<option value="Tours">Tours</option>--}}
                                {{--<option value="WOOFING">WOOFING</option>--}}
                            {{--</select></li>--}}
                        <li><select name="category" class="form-control filter">
                                <option value="">Orchard Type</option>
                                <option value="Packer">Packer</option>
                                <option value="Grower">Grower</option>
                            </select>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

@include('includes.footer-dark')

@include('includes.scripts')

<script type="text/javascript" src='/assets/js/jquery.flexslider.min.js'></script>
<script type="text/javascript" src='/assets/js/jquery.stellar.js'></script>
<script type="text/javascript" src="/assets/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="/assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="/assets/js/waypoints-sticky.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.countTo.js"></script>
<script type="text/javascript" src="/assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="/assets/js/contact.js"></script>

<script>
    $('.filter').on('change', function(){
        // Reload the page filtering by this criteria:
        var filter = $(this).attr('name');
        var value = $(this).val();

        window.location.replace('sales-directory?filter='+filter+'&value='+value);
    });

    $('#member-search').on('click', function (){

        var searchVal = $('#search-term').val();

        window.location.replace('sales-directory?searchTerm='+searchVal);
    });

</script>
</body>

</html>