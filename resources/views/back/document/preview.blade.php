@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling">
            <div class="container-fluid ">

                <div class="row ">

                        <button class="btn bottom-buffer-2 tweaked-margin btn-success btn-fill small-btn "><i class="fa fa-angle-left"></i><a href="document-approved.html">Back to Approved List</a></button>
                    
                </div>

                    <div class="row"> 

                            <div class="card card-inner-spacer card-inner-bottom-2">
                            
                                <div class="row">

                                        <div class="col-md-2 text-left"> 
                                                <p>Document ID</p>
                                                <h5 class="sub-title-2">Batch ID- {{ $document->batch_id }}</h5>
                    
                                        </div>

                                        <div class="col-md-4 col-md-offset-6 text-right">
                                            <a href="{{ route('pdf-download', $document->document_id) }}" class="btn tweaked-margin btn-success btn-fill small-btn"> View Pdf</a>
                                         
                                        </div>

                                </div>

                                <div class="row cert-page">

                                        <page size="A4" layout="portrait">


                                            <div class="cert-header">
                                                <div class="col-md-3 text-right">
                                                    <img src="{{ asset('/img/imo-logo.png') }}" alt="imo State Government">
                                                </div>

                                                <div class="col-md-6">

                                                    <h1>Imo State Government Nigeria</h1>
                                                    <h2>Certificate of Occupancy</h2>
                                                    
                                                </div>

                                                <div class="col-md-3">

                                                        <img src="{{ asset('/img/faces/face-2.jpg') }}" alt="User">
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">

                                                <div class="cert-body">

                                                    <p> Statutory Certificate of Occupancy No {{ $document->document_id }}      <span>Page: 45</span>     <span>Volume: 45</span></p>
                                                    <p> THIS IS TO CERTIFY THAT <span>{{ $document->getOwnerFullName() }}</span> (hereinafter called the holder/holders which term shall include any person/persons defined as such in section 9 of the Land Use Act    No.6 of 1978) is/are entitled to a right of occupancy in and over
                                                    Plot <span>{{ $document->documentable->house_plot_number }}, {{ $document->documentable->street_name }}, {{ $document->documentable->city }}</span> in Block within <span>{{ $document->documentable->documentable_type }}sqm</span> Layout or in and over a parcel of land described in the schedule and more particularly delineated in the
                                                    </p>

                                                    <p> Plan No <span>{{ $document->documentable->survey_plan_number }}</span> annexed hereto for a term <span>{{ $document->documentable->term }}</span> years commencing from the 1st day of January, <span>2018</span>  according to the true intent and meaning of the Land Use Act of No.6 of 1978 and subject to the provision thereof and to the following special terms and conditions hereinafter contained.
                                                        </p>

                                                   
                                                    <ol>
                                                        <li>To pay in advance without demand to the Governor or other person appointed by him yearly rent of <span>#{{ $document->documentable->yearly_rent_payable }}</span> on the first day of January in each year.</li>

                                                        <li>The rent hereby reserved hall be revised at the end of every ten years of the Certificate of Occupancy</li>

                                                        <li>To pay and discharge all rates, assessments and impositions whatsoever which shall at any time be charged, assessed or imposed on the said land or any building thereon or upon the occupier or occupiers thereof.</li>

                                                        <li>To erect and complete on the said land within <span>2 (two)</span> years from the date of ncement of this right of occupancy, buildings or other work specified in the etailed plans approved by the Chief Land Officer or other officer appointed by the Governor in that behalf.</li>

                                                        <li>Such buildings or other works shall not be less than <span>#{{ $document->documentable->building_value }}</span> in value to the faction of and in accordance with plans approved by the Chief Land Officer or other officer appointed by the Governor in that behalf.</li>
                                                        <li> To use the said land only for <span>{{ $document->documentable->purpose_of_use }}</span> Purpose </li>
                                                        <li>To maintain, in good and substantial repair to the satisfaction of the Chief Land Officer or other officer appointed by the Governor, all buildings or works in the said land either erected or to be erected pursuant to subsection 4 supra.</li>
                                                        <li>To maintain good and substantial condition, all beacons and other landmarks by which the boundaries of the land comprised in this Certificate of Occupancy are defined and to clear and keep clear of the said land of all forms of refuse, stagnant water, rank weeds, deposit of rubbish and to keep the same in all respects in a clean and sanitary condition and execute all such acts and works as the Governor or any other officer authorized by him may reasonably require</li>
                                                        <li>To maintain good and substantial condition, all beacons and other landmarks by which the boundaries of the land comprised in this Certificate of Occupancy are defined and to clear and keep clear of the said land of all forms of refuse, stagnant water, rank weeds, deposit of rubbish and to keep the same in all respects in a clean and sanitary condition and execute all such acts and works as the Governor or any other officer authorized by him may reasonably require</li>
                                                        <li>Not to erect or build or permit to be erected or build on the said land any buildings other than those covenanted to be erected by virtue of this Certificate of Occupancy or to make or permit to be made any addition or alteration to the said building erected or to be erected on the land except in accordance with the plans and specifications approved by the Chief Land Officer or other officer appointed by the Governor in that behalf.</li>
                                                        <li> Not to alienated the right of occupancy hereby granted or any part thereof either by sale, assignment, mortgage sublease or otherwise howsoever without the consent in writing of the Governor first and obtained.</li>
                                                    </ol>

                                                </div>

                                                    

                                                    <div class="cert-footer">

                                                        <div class="col-md-6">
                                                            <p>Date</p>
                                                            <p><span class="cert-date"> {{ $document->approved_at }} </span></p>
                                                        </div>
                                                        <div class="col-md-6 exe-gov-sig-center">
                                                            <img class="exe-gov-sig" src="{{ asset('/img/signature.png') }}" alt="Executive">
                                                            <p  class="exe-gov-text">Executive Governor</p>
                                                        </div>

                                                        <div class="col-md-12 holder-sig">

                                                            <p>Holder</p>
                                                            <img src="{{ asset('/img/signature.png') }}" alt="Executive">
                                                            
                                                            
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