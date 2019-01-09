@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling">
            <div class="container-fluid ">

                <div class="row ">

                    <a href="{{ route('approved-document') }}" class="btn bottom-buffer-2 tweaked-margin btn-success btn-fill small-btn "><i class="fa fa-angle-left"></i>Back to Approved List</a>

                </div>

                <div class="row">

                    <div class="card card-inner-spacer card-inner-bottom-2">

                        <div class="row hide-on-print">

                            <div class="col-md-2 text-left">
                                <p>Document ID: {{$document->document_id }}</p>
                                <h5 class="sub-title-2">Batch ID- {{ $document->batch_id }}</h5>
                            </div>

                            <div class="col-md-4 col-md-offset-6 text-right">

                                <a href="{{ route('pdf-download', $document->document_id) }}" class="btn tweaked-margin btn-success btn-fill small-btn" > View Pdf</a></button>

                            </div>

                        </div>

                        <div class="row cert-page">

                            <page size="A4">
                                <div class="cert-header">
                                    <div class="header-left">
                                        <img src="{{ asset('img/imo-logo.png') }}" alt="imo State Government">
                                    </div>

                                    <div class="header-middle">
                                        <h1>Imo State Government Nigeria</h1>
                                        <h2>Certificate of Occupancy</h2>
                                    </div>

                                    <div class="header-right">
                                        @if ($document->getOwnerPassport())
                                            <img src="{{$document->getOwnerPassport()->file}}">
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12">

                                    <div class="cert-body">
                                        <p> <b>Statutory {{$document->documentable_type}} No {{$document->document_id}}</b> <span>Page: 45</span> <span>Volume: 45</span></p>
                                        <p> THIS IS TO CERTIFY THAT <b> {{$document->getOwnerFullName()}}</b> hereinafter called the holder/holders which term shall include any person/persons defined as such in section 9 of the Land Use Act No.6 of 1978) is/are entitled to a right of occupancy in and over Plot <b>{{ $document->documentable->house_plot_number }}, {{ $document->documentable->street_name }}, {{ $document->documentable->city }}</b> in Block within <b>{{$document->documentable->dimension }}</b> Layout or in and over a parcel of land described in the schedule and more particularly delineated in the</p>
                                        <p> Plan No <b>{{$document->documentable->survey_plan_number }}</b> annexed hereto for a term <b>{{$document->documentable->term }}</b> years commencing from the 1st day of January, 2018 according to the true intent and meaning of the Land Use Act of No.6 of 1978 and subject to the provision thereof and to the following special terms and conditions hereinafter contained.
                                        </p>


                                        <ol class="print-list">
                                            <li>To pay in advance without demand to the Governor or other person appointed by him yearly rent of <b>{{$document->documentable->yearly_rent_payable}}</b> on the first day of January in each year.</li>

                                            <li>The rent hereby reserved hall be revised at the end of every ten years of the <b>{{$document->documentable->type}}</b></li>

                                            <li>To pay and discharge all rates, assessments and impositions whatsoever which shall at any time be charged, assessed or imposed on the said land or any building thereon or upon the occupier or occupiers thereof.</li>

                                            <li>To erect and complete on the said land within <b>{{$document->documentable->development_period}}</b> years from the date of ncement of this right of occupancy, buildings or other work specified in the etailed plans approved by the Chief Land Officer or other
                                                officer appointed by the Governor in that behalf.</li>

                                            <li>Such buildings or other works shall not be less than <b>#10,000,000.00</b> in value to the faction of and in accordance with plans approved by the Chief Land Officer or other officer appointed by the Governor in that behalf.</li>
                                            <li> To use the said land only for <b>{{$document->documentable->purpose_of_use}}</b> Purpose </li>
                                            <li>To maintain, in good and substantial repair to the satisfaction of the Chief Land Officer or other officer appointed by the Governor, all buildings or works in the said land either erected or to be erected pursuant to subsection 4
                                                supra.
                                            </li>
                                            <li>To maintain good and substantial condition, all beacons and other landmarks by which the boundaries of the land comprised in this Certificate of Occupancy are defined and to clear and keep clear of the said land of all forms of refuse,
                                                stagnant water, rank weeds, deposit of rubbish and to keep the same in all respects in a clean and sanitary condition and execute all such acts and works as the Governor or any other officer authorized by him may reasonably require</li>
                                            <li>To maintain good and substantial condition, all beacons and other landmarks by which the boundaries of the land comprised in this {{$document->documentable->type}} are defined and to clear and keep clear of the said land of all forms of refuse, stagnant
                                                water, rank weeds, deposit of rubbish and to keep the same in all respects in a clean and sanitary condition and execute all such acts and works as the Governor or any other officer authorized by him may reasonably require</li>
                                            <li>Not to erect or build or permit to be erected or build on the said land any buildings other than those covenanted to be erected by virtue of this Certificate of Occupancy or to make or permit to be made any addition or alteration to
                                                the said building erected or to be erected on the land except in accordance with the plans and specifications approved by the Chief Land Officer or other officer appointed by the Governor in that behalf.</li>
                                            <li> Not to alienate the right of occupancy hereby granted or any part thereof either by sale, assignment, mortgage sublease or otherwise howsoever without the consent in writing of the Governor first and obtained.</li>

                                        </ol>

                                    </div>



                                    <div class="cert-footer">

                                        <div class="cert-left">
                                            <h2>Date</h2>
                                            <p><span class="cert-date"> {{$document->approved_at}}  </span></p>
                                        </div>

                                        <div class="cert-right">

                                            <div class="sign-holder">
                                                <img src="{{ $signature->file }}">
                                                <p class="exe-gov-text" style="text-align:center; padding-left: 0px;">Owelle Rochas Okorocha<br>Executive Governor</p>
                                            </div>
                                        </div>




                                    </div>


                                </div>
                            </page>

                        </div>

                    </div><!--  end card  -->
                </div> <!-- end row -->


                <!-- Button trigger modal -->




            </div>
        </div>


        

    </div>
</div>

@endsection