@extends('layouts.frontend.app')

@section('title','Claims Service')

@push('css')

@endpush

@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/cliams.png)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Claims and Dispute Resolution Services</li>
                </ul>
                <h2>Claims and Dispute Resolution Services</h2>
            </div>
        </div>
    </section><BR><BR>

    <section class="">
        <div class="container">
            <div class="row">
                <p class="section-sub-title">Claims and Dispute Resolution Services</p>
                <div class="service-details__right">
                    <div class="service-details__content">
                        <p class="service-details__text-1">
                            Tamara Consulting staff are highly experienced professionals in claims and dispute resolution with the ability to assist clients in selecting, drafting and reviewing construction contracts and establishing effective contract management procedures to reduce the likelihood of disputes arising.<br><br>Our methodology is to work hand-in-hand with the client, through conducting workshops, investigate and analyze the cause and effect of events, prepare submissions and present cases. We strive to resolve the claim dispute in advance with EPC Contractor’s client to avoid litigation and legal arbitration.
                        </p>
                        <h2 class="section-sub-title d-flex justify-content-center">CONSTRUCTION CLAIMS & DISPUTES</h2><hr>
                        <h2 class="section-sub-title">An Introduction To Tamara Consulting House</h2>
                        <p class="service-details__text-1">Tamara Consulting House has many years of experience in engineering and project management, contract administration, and project scheduling and controls and have the qualifications, capability, know-how in assessing project claims, managing and resolving disputes to prevent problems that negatively affect the success of construction projects.<br>
                            Tamara Consulting House provides an independent and unbiased reviews, objective analysis, and assessment of claims to project owners and EPC contractors. It has the capability to provide clients with the knowledge to properly manage and control the scope, quality, cost, schedule, and contract administration aspects of their projects and prevent or mitigate problems that may arise during project execution.<br>
                            Also, it provides a third-party review and assessment to qualify the client’s potential claim and offer advice on the proper action taken to settle the dispute. The primary role in this type of service, is an investigative role, reviewing evidence from the disputing parties, along with the results of any inquiries as well as knowledge derived from its own expertise. This type of service normally has a high success rate when it comes to resolving a high value of construction disputes.<br>
                            In addition, Tamara Consulting House has established a network of several partners
                            who have many years of experience in engineering and project construction and managed and executed mega projects and are well familiar with construction challenges in industrial projects.<br>
                            Also, Tamara Consulting House has established alliances with two international claim consulting firms, Long International and PROMES Engineering Systems, to provide additional consultation, advisory services and resources, as needed. These alliances will ensure speed of service, quality of assessment and knowledge sharing of best practices.<br>Long International has been in business for the past 15 years and has gained an excellent track record for serving North America and international market. The headquarter is located in Denver, Colorado, USA whereas, PROMIS has been in business since 1993 and has gained excellent reputation serving the GCC market with its headquarter located in Dubai, UAE.<br>
                            Tamara Consulting House, with the support of its alliances, is equipped and ready to serve project owners and EPC companies in their efforts to conduct project claims reviews, project analysis and controls, dispute resolutions, and advisory services for project planning, execution and scheduling.</p>
                    </div>
                    <h2 class="section-sub-title">How We Can Help</h2>
                    <img class="img-fluid mx-auto d-block mr-2" src="{{ asset('assets/frontend/images/claims/keys.png') }}" alt="" style="width: 55%">
                    <h2 class="section-sub-title">Our Approach</h2>
                    <p class="service-details__text-1">
                        To avoid claims, the preferred approach is to become involved during the initial stage of project detailed design or pre-construction phase to mitigate any potential risk. Should the involvement start either during or after construction, the client receives assistance to overcome project delays and disruptions and advices to eliminate potential disputes and claims.<br>
                        During the pre-construction phase, in place processes and procedures will be established to ensure that claims and disputes are eliminated or mitigated without causing any project delay or budget overrun.<br>
                        It’s known that a consultant firm is only as good as its consultants. Tamara consultants and partners are industry leaders in their chosen field. Each consultant has a minimum of 20 years’ experience in project management, technically savvy, and an expert in oil, gas and petrochemical construction industry. Tamara Consulting House is equipped to assist clients with the identification and development of the following claim types:<br>
                    </p>
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-6">
                            <ul class="list-unstyled service-details__benefits-points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Cause and Effect Analysis </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Claim Analysis and Management</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Claim Preparation and Defense</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>CPM Schedule Analysis  </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Budget and Cost Analysis</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Calculation of Damages </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-6">
                            <ul class="list-unstyled service-details__benefits-points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Dispute Prevention and Mitigation </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Document and Database Management</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Entitlement Assessment</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Third party review</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Labor Productivity Analysis</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Litigation Support  </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p class="service-details__text-1">
                        Tamara Consulting House team is available, willing and qualified to tackle the most difficult and challenging aspects of helping the client eliminate, minimize, or resolve disputes or claims in the most economical way.<br>
                        Tamara Consulting House emphasizes the importance of vigilant record keeping and document management processes necessary to identify, prepare and quantify damages in order to support or defend a claim. The most appropriate industry standard as-built vs. as-planned methods will be selected and conducted for delay claim causation and schedule analysis.<br>
                        The main objective is to resolve claim disputes between owners, contractors and subcontractors amicably and ensure completion of projects within time, budget, and quality.<br>
                    </p>
                    <h2 class="section-sub-title">Our Methodology</h2>
                    <p class="service-details__text-1">
                        The Claim Resolution Methodology, used by Tamara Consulting House, incorporates a systematic process involving problem identification, document analysis and development of computerized document databases, contract analysis, entitlement analysis, establishment of cause-effect relationships often requiring CPM schedule analyses, and damages analysis and calculations. It identifies the problems which cause cost, quality, and schedule delay on the project. Because of the extensive amount of documentation generated by construction projects and the disputes that arise, Tamara Consulting House often relies on clients to provide documents electronically. This method will provide a cost-effective solution to evaluate the delays, disruption, design changes, and actions and/or inactions of the parties that are central to the disputes being evaluated.</p>
                    <img src="{{ asset('assets/frontend/images/claims/img1.png') }}" alt="..." class="img-thumbnail " style="max-width: 40%; margin: 0 0px 20px 20px; float: right">
                    <p class="service-details__text-1">The consultants will examine and review all claims consultation elements such as cost and damage assessment, delay analysis, loss of labor productivity analysis, etc. by adopting concise and objective methodology steps. Working together with a legal advisor, the consultants will establish whether there is expressed or implied contractual entitlement for recovery of the damages caused by the problems that occurred during the history of the project. The entitlement is established through contract language or case law.
                    <br>
                        The consultants will employ accepted CPM Schedule Analyses including Time Impact, and Windows methodologies all of which consider planned versus actual activity durations, labor and equipment resources, means and methods, logistical constraints, contractual requirements, as well as the actions and inactions of the parties.<br>
                        The concurrent delays will be analyzed to properly understand the project Owner’s and Contractor’s liability for delay and impact damages. A thorough retrospective schedule analysis of project delays is essential for the equitable resolution of delay and impact-related construction disputes.<br>
                        The Damages Methodology is based on establishing a Cost and Damage Matrix framework to allocate responsibility for man-hour and cost variances between control budgets and actual man-hours and costs at the cost account, discipline, work activity, and cost type level, if available.<br>
                        If practical, the consultants would attempt to integrate the schedule activities with the available cost account detail to more accurately establish Cause-Effect Relationships between problems, schedule impacts, productivity losses, and cost overruns.
                    </p><br>
                    <img src="{{ asset('assets/frontend/images/claims/img2.png') }}" alt="..." class="img-thumbnail " style="max-width: 30%; margin: 0 80px 0px 0px; float: left">
                    <p class="service-details__text-1">As a result of cumulative experience in many major industrial projects, the consultants can bring objectivity and balance to the investigation that lead to dispute resolution. Tamara Consulting House value comes from the quality of its analyses and the ability to help parties reach timely and favorable resolutions, oftentimes avoiding expensive arbitrations or litigations.</p><br>
                        <p>Tamara consultants provide effective analyses of cost, schedule, quality, and scope, isolating the real issues and their implications. In the event a matter escalates to a formal claim, the consultants are highly experienced in providing the required services and support.</p><br>
                    <h2 class="section-sub-title">Our Deliverables</h2>
                    <p class="service-details__text-1">Tamara Consulting House construction management consultants have expertise in
                        the preparation and presentation of construction claims. They assist clients in all
                        construction industries by offering strategic insights and support including analysis,
                        quantification, preparation and presentation of claims.<br></p>
                    <img src="{{ asset('assets/frontend/images/claims/img3.png') }}" alt="..." class="img-fluid" style="max-width: 20%; margin: 0 80px 0px 0px; float: left">
                    <p class="service-details__text-1">Normally, after reviewing project documents and analyzing all events, the consultants provide a professionally drafted claim report in support of litigation that include planned versus current situation, claim analysis, cost analysis, entitlements, facilitation of resolution leading to equitable settlement, and finally identifying a range of (minimum and maximum) claim amount that need to be settled with the project owner.<br>The consultants have the knowledge and experience to assist with developing a strategic approach, preparing an effective claim and presenting the claim in a way that will maximize recovery of potential losses. A thorough analysis of project contracts and documentation along with effective written and graphical illustrations of the facts can assist in supporting the client position. The consultants can assist with the preparation and presentation of all types of claims.</p>
                </div>
            </div>
        </div>
    </section><br><br>
@endsection

@push('js')

@endpush
