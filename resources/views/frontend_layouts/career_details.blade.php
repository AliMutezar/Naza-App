@extends('layouts.app-seargin')

@section('content')

<!-- breadcrumb start -->
<section class="breadcrumb bg_img" data-bg-color="#E7E9EE" data-background="assets/img/bg/page_title.png">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="breadcrumb__content">
                    <h2 class="breadcrumb__title">Career Details</h2>
                    <ul class="breadcrumb__list clearfix">
                        <li class="breadcrumb-item"><a href="index.html">seargin</a></li>
                        <li class="breadcrumb-item">Career details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- career single start -->
<section class="career-single pt-140 pb-140">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 mb-90">
                <div class="career-single__content">
                    <h2>Senior Product Designer - (Full-Time)</h2>
                    <ul class="career-single__list mb-60">
                        <li><span>Department :</span> Product Designer</li>
                        <li><span>No. of Openings :</span> 3</li>
                        <li><span>Job Type :</span> Full-Time</li>
                        <li><span>Location :</span> Warsaw, Poland</li>
                        <li><span>Salary range :</span> $80k to $100k (Based on your experience).</li>
                        <li><span>Working days :</span> Weekly 05 days. Sunday To Thursday. 09 AM to 06 PM.(Launch Break
                            01 Hour)</li>
                        <li><span>Application Deadline :</span> November 10, 2023</li>
                        <li><span>Experience Required :</span> 5+ Years</li>
                    </ul>
                    <p>We’re looking for an eager and knowledgeable Product Designer to join our technical team in
                        Warsaw, Poland. You’ll be expected to utilize bleeding-edge technology and robust techniques.
                        You should be an excellent communicator and comfortable managing multiple tasks. you also need
                        to be a team player and have a problem-solving aptitude.
                    </p>
                    <p>Working quickly and creatively should come naturally to you, as well as being an innovative
                        problem-solver who takes pride in producing logical, simple, and effective solutions to what are
                        often very new and complex issues.</p>
                    <h3 class="mt-65">What you'll get to do...</h3>
                    <ul>
                        <li>Refactor current code to service-oriented architecture</li>
                        <li>Collaborate with a unique background of engineering, product, and operations team members to
                            deliver the best solution for our customers</li>
                        <li>Solve technical problems that few have solved before – no one else helps local businesses
                            the way we do</li>
                        <li>Participate in the decision-making progress – we want you to speak up</li>
                        <li>Mentor your team members to share your passion for software, your appreciation for
                            engineering field, and your respect.</li>
                        <li>Take on the challenge of making what you build higher quality, faster, and more scalable
                        </li>
                        <li>Participate in on-call rotation</li>
                    </ul>
                    <h3 class="mt-65">Your experience should include...</h3>
                    <ul>
                        <li>6+ years of previous professional software design experience</li>
                        <li>Proficiency in design software (e.g., Adobe Creative Suite).</li>
                        <li>Strong creative and innovative thinking.</li>
                        <li>Basic understanding of materials and manufacturing.</li>
                        <li>Good communication and collaboration skills.</li>
                        <li>Collaboration with cross-functional teams</li>
                        <li>Deep knowledge and a passion and following proven design patterns.</li>
                        <li>Solid foundation in data structures and algorithms</li>
                        <li>Adaptability to changing project requirements.</li>
                    </ul>
                    <h3 class="mt-65">You might also have...</h3>
                    <ul>
                        <li>Experience with AWS</li>
                        <li>Experience building CI/CD and server/deployment automation solutions</li>
                        <li>Experience with open-source puppet, infrastructure-as-code</li>
                        <li>Passion for technology</li>
                        <li>You have high standards and want to make a difference with your work</li>
                        <li>You are always trying to improve</li>
                    </ul>
                    <h3 class="mt-65">Great Benefits...</h3>
                    <ul>
                        <li>Company-wide 401(k) plan</li>
                        <li>Life & disability insurance offered</li>
                        <li>Competitive compensation—salary, bonus, equity</li>
                        <li>Medical, dental, and vision; flex spending account</li>
                        <li>Flexible paid time off & sick leave</li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <div class="job-apply">
                    <div class="job-apply__holder">
                        <h3>Apply for This Job</h3>
                        <p>Seargin doesn’t accept unsolicited resumes from recruiters or employment agencies.</p>
                    </div>
                    <form class="job-apply__form" action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="xb-field">
                                    <label for="name">Name*</label>
                                    <input id="name" type="text" placeholder="Carlo Castillo">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="xb-field">
                                    <label for="email">Email*</label>
                                    <input id="email" type="text" placeholder="example@gmail.com">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="xb-field">
                                    <label for="number">Phone*</label>
                                    <input id="number" type="text" placeholder="+88 (0) 101 0000 000">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="xb-field">
                                    <label for="address">Address*</label>
                                    <input id="address" type="text" placeholder="Warsaw, Poland">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="xb-field">
                                    <label for="salary">What is your expected salary?*</label>
                                    <input id="salary" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="xb-field">
                                    <label for="message">Cover Letter</label>
                                    <textarea name="message" id="message" cols="30" rows="10"
                                        placeholder="Write about work experience..."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="xb-field">
                                    <label for="resume">Resume/CV*</label>
                                    <div class="clearfix"></div>
                                    <input id="resume" type="file" />
                                    <p class="input-filed-text mt-20"><span>Accepted file types :</span> pdf, doc, jpg,
                                        Max. file size: 15 MB.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="xb-btn" type="submit">submit now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- career single end -->

@endsection