<?php
// Template Name: Home Page

get_header();
?>

<article>
    <section id="get-brochure" class="md:flex p-0 text-white">
        <div class="flex-1 relative md:h-auto h-[400px]">
            <figure class="w-full h-full relative z-0">
                <?php $image_id = 866;
                echo wp_get_attachment_image($image_id, "large", false, [
                    "loading" => "eager",
                    "class" => "image-cover",
                ]); ?>
                <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
            </figure>
        </div>
        <div class="flex-1 md:py-14 md:px-20 p-5 bg-third">
            <h2 class="text-center text-white">Get Your Brochure</h2>
            <?php echo do_shortcode('[wpforms id="705"]') ?>
        </div>
    </section>
    <section>
        <div class="flex md:gap-10 gap-5 md:flex-row flex-col items-center">
            <div class="flex-1">
                <h2>Program Overview</h2>
                <p>
                    Leadership in the new world requires a fresh set of skills that empower leaders and managers to face disruption head-on and lead in a world of increasing volatility and complexity. Cornell CXO Leadership Program (CXO) is designed to empower senior leaders to lead through these complex and uncertain times. You get access to the best of Ivy League education facilitated by award-winning faculty from Cornell University and global industry experts,
                </p>
            </div>
            <div>
                <ul class="list-none rounded-lg md:space-y-8 space-y-5 m-0 border-2 border-primary border-solid md:p-10 p-5 w-full">
                    <li class="flex items-center gap-5">
                        <figure class="md:w-[60px] w-[40px]">
                            <?php $image_id = 842;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <div>
                            <p class="mb-0 md:text-xl text-lg font-medium text-primary">
                                STARTS ON
                            </p>
                            <p class="mb-0 md:text-2xl text-xl font-semibold">
                                2 November 2024
                            </p>
                        </div>
                    </li>
                    <li class="flex items-center gap-5">
                        <figure class="md:w-[60px] w-[40px]">
                            <?php $image_id = 841;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <div>
                            <p class="mb-0 md:text-xl text-lg font-medium text-primary">
                                DURATION
                            </p>
                            <p class="mb-0 md:text-2xl text-xl font-semibold">
                                6 MONTHS
                            </p>
                        </div>
                    </li>
                    <li class="flex items-center gap-5">
                        <figure class="md:w-[60px] w-[40px]">
                            <?php $image_id = 840;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <div>
                            <p class="mb-0 md:text-xl text-lg font-medium text-primary">
                                PROGRAM FEE
                            </p>
                            <p class="mb-0 md:text-2xl text-xl font-semibold">
                                US$4,800
                            </p>
                            <button class="underline font-medium text-primary hover:text-primary/80" onclick="showModal('emi_form_modal')">Easy EMI options available</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="bg-[#656d71]">
        <h2 class="text-center text-white">
            Program Highlights
        </h2>
        <ul class="list-none p-0 m-0 h-full flex flex-wrap md:gap-x-12 md:gap-y-20 gap-5">
            <li class="lg:basis-1/4 md:basis-1/3 flex-1 basis-full space-y-5">
                <figure class="mx-auto md:h-[100px] h-[80px] shrink-0">
                    <?php $image_id = 848;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="text-center text-white">
                    <p class="md:text-xl text-lg font-medium">12 interactive sessions by Cornell faculty
                        (100% LIVE)</p>
                </div>
            </li>
            <li class="lg:basis-1/4 md:basis-1/3 flex-1 basis-full space-y-5">
                <figure class="mx-auto md:h-[100px] h-[80px] shrink-0">
                    <?php $image_id = 847;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="text-center text-white">
                    <p class="md:text-xl text-lg font-medium">4 interactive sessions by global industry experts (100% LIVE)</p>
                </div>
            </li>
            <li class="lg:basis-1/4 md:basis-1/3 flex-1 basis-full space-y-5">
                <figure class="mx-auto md:h-[100px] h-[80px] shrink-0">
                    <?php $image_id = 846;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="text-center text-white">
                    <p class="md:text-xl text-lg font-medium">Peer coaching and assessments</p>
                </div>
            </li>
            <li class="lg:basis-1/4 md:basis-1/3 flex-1 basis-full space-y-5">
                <figure class="mx-auto md:h-[100px] h-[80px] shrink-0">
                    <?php $image_id = 845;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="text-center text-white">
                    <p class="md:text-xl text-lg font-medium">
                        Access to 2000+ Courses
                    </p>
                </div>
            </li>
            <li class="lg:basis-1/4 md:basis-1/3 flex-1 basis-full space-y-5">
                <figure class="mx-auto md:h-[100px] h-[80px] shrink-0">
                    <?php $image_id = 844;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="text-center text-white">
                    <p class="md:text-xl text-lg font-medium">
                        Certificate from Cornell University
                    </p>
                </div>
            </li>
            <li class="lg:basis-1/4 md:basis-1/3 flex-1 basis-full space-y-5">
                <figure class="mx-auto md:h-[100px] h-[80px] shrink-0">
                    <?php $image_id = 843;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="text-center text-white">
                    <p class="md:text-xl text-lg font-medium">Small cohort for impactful learning </p>
                </div>
            </li>
        </ul>
    </section>
    <section>
        <div>
            <h2 class="text-center mb-0">Curriculum</h2>
            <h3 class="text-center">
                Live Online Modules
            </h3>
            <br>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    Module 1: Think - Developing a strategic mindset
                </h3>

                <ul>
                    <li>Thinking Strategically</li>
                    <li>The Future Digital Dimensions</li>
                    <li>Entrepreneurial Mindset</li>
                    <li>Getting Things Done</li>
                    <li>Systems Thinking</li>
                    <li>Managing Complexity</li>
                    <li>Leading with Disruptive Innovation</li>
                </ul>


                <div class="readmore-content mt-5" style="display: none;">
                    <div class="module-1">
                        <h3>Thinking Strategically</h3>
                        The session helps in building strategies for competitive advantage and generating superior value for customers.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Understand the components of an effective strategy</li>
                            <li>Evaluate how an organization can respond successfully to change and devise appropriate strategies to do so</li>
                            <li>Understand the core ideas underlying strategic planning processes</li>
                            <li>Tesla case study to comprehend its business model</li>
                        </ul>
                        <h3>The Future Digital Dimensions</h3>
                        This session focuses on the best practices applicable to several product and service designs; business model transformation, and sales transformation templates to devise ideas for new products and services.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Discover more about blockchain</li>
                            <li>Tools to identify the best ideas for digital transformation</li>
                            <li>Understand processes to create platform business models</li>
                            <li>Understand metaverse, virtual reality and the future of tomorrow</li>
                        </ul>
                        <h3>Entrepreneurial Mindset</h3>
                        The session helps formulate business models and develop processes to maximize entrepreneurial abilities. It also helps you to adopt design thinking and innovation as a strategy in your organization and helps you apply design thinking frameworks and strategies to develop innovative solutions for complex business problems.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Introduction to five stages of the design process</li>
                            <li>Connect design and entrepreneurial thinking to innovation</li>
                        </ul>
                        <h3>Getting Things Done</h3>
                        This session is designed around a set of levers interleaved into a larger framework for ‘Getting Things Done. The framework will drive your performance by making your implicit skills explicit, and help you implement ideas back into your work world.<br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>A framework of simple but effective levers that have been shown to improve performance considerably</li>
                            <li>This session has three goals: to make you more effective, to equip you to teach others to be more effective, and to give you a framework that will help you implement tools and concepts to get things done</li>
                        </ul>
                        <h3>Systems Thinking</h3>
                        In this session, you will learn to integrate systems thinking concepts, principles, and practices to improve existing processes, operations, and thinking patterns, ultimately developing a more three-dimensional mindset toward problem-solving.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Learn about the DSRP model</li>
                            <li>Understand mental models – What you think vs what is real</li>
                            <li>Engage the ecosystem around you to generate new innovation possibilities</li>
                            <li>Understand the relationships and systems that create new possibilities</li>
                        </ul>
                        <h3>Managing Complexity</h3>
                        The session helps gain insights into how the brain learns, how to learn more quickly, why we frequently make terrible judgments, and how to learn from both successes and failures. Learn to make more deliberate and informed decisions while potentially doubling your learning capacity.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Learn how to systematically think back on your experiences and draw lessons from them</li>
                            <li>Learn to manage the decision process rather than just the decision to add more value</li>
                        </ul>
                        <h3>Leading with Disruptive Innovation</h3>
                        This session takes you through an in-depth understanding of disruption, innovation, and disruptive innovation’s impact on business. Learn more about various methodologies and approaches in innovation and real-world use cases that provide deeper insights into the state of innovation and disruption today. Explore best practices in innovation, human-centric design, lean methodologies, and a multi-horizon portfolio approach to innovation.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Key factors driving disruption</li>
                            <li>Innovation engineering: Key principles</li>
                            <li>Multi-Horizon portfolio approach to innovation strategy</li>
                            <li>Looking forward: Industry 4.0 disruption – The next wave</li>
                        </ul>
                    </div>
                </div>

                <button name="show more details" aria-label="Show more details" class="cbtn-outline mt-5" data-target="0" onclick="toggleReadMore(this)">Read more</button>
            </div>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    Module 2: Feel - Being purposeful and resilient
                </h3>

                <ul>
                    <li>Dynamics of Decision Making</li>
                    <li>Emotional Intelligence</li>
                    <li>Social Intelligence</li>
                </ul>


                <div class="readmore-content mt-5" style="display: none;">
                    <div class="module-1">
                        <h3>Dynamics of Decision Making</h3>
                        The session helps to understand the importance of credibility. Learn through shared examples of leaders who created a better organizational culture by demonstrating credibility. Learn why we need to consider integrity as a personal discipline.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Learn through real-life scenarios where our credibility will be tested</li>
                            <li>Learn to manage your credibility to be more effective</li>
                            <li>Understand the importance of leader integrity and its relation to organizational success</li>
                        </ul>
                        <h3>Emotional Intelligence</h3>
                        The session teaches you, new skills in reading others and framing your interactions more effectively. It also helps in becoming more adept at speaking to the mood around you.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Measures to assess your emotional intelligence</li>
                            <li>Learn techniques for managing and using emotions as a leadership tool</li>
                        </ul>
                        <h3>Social Intelligence</h3>
                        Learn to effectively navigate interactions with others, build trust, and engage with differences to achieve impactful outcomes that surpass individual capabilities. Participants will develop a deeper understanding of how others respond to their actions, gain insights into how others perceive them, and refine their responses in moments of difference. This enhanced awareness and skill in managing interpersonal dynamics will empower leaders to foster a more collaborative and innovative organizational environment.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Understand the concept of social intelligence and its importance in leadership</li>
                            <li>Learn about the key drivers and elements of Social Intelligence</li>
                            <li>The session will provide insights into leading diverse teams, fostering an inclusive environment that leverages diverse perspectives for greater innovation and performance.</li>
                        </ul>
                    </div>
                </div>

                <button name="show more details" aria-label="Show more details" class="cbtn-outline mt-5" data-target="1" onclick="toggleReadMore(this)">Read more</button>
            </div>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    Module 3: Do - Execution excellence for self and teams
                </h3>

                <ul>
                    <li>Power and Influence</li>
                    <li>Communication and Story Telling</li>
                    <li>Advanced Negotiation Strategies</li>
                    <li>Financial Acumen</li>
                    <li>Leading in Crisis</li>
                    <li>Leading Innovation</li>
                </ul>


                <div class="readmore-content mt-5" style="display: none;">
                    <div class="module-1">
                        <h3>Power and Influence</h3>
                        The session helps in assessing social capital and enhancing it to achieve goals. It also teaches you the art and science of power and influence in organizations.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Understand network density and how networks must be broad, connective and dynamic</li>
                            <li>Understand the characteristics of influential leaders</li>
                            <li>Importance of networking and how to leverage networks and influence authority</li>
                        </ul>
                        <h3>Communication and Story Telling</h3>
                        The session attempts to help you project confidence and competence when communicating at the workplace, by helping you gain better awareness of your communication behaviors that build or hinder leadership presence.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>3 components of executive presence – Gravitas, Communication, and Appearance.</li>
                            <li>5Cs framework to project executive presence from the book ‘Composure’</li>
                            <li>Learn the top 5 self-sabotaging behaviors that could affect one’s executive presence, non-verbal cues to avoid</li>
                            <li>Understand the common narrative arc and tools for effective storytelling</li>
                            <li>Translate key messages through sticky stories and communication</li>
                        </ul>
                        <h3>Advanced Negotiation Strategies</h3>
                        The session improves the negotiation abilities with the help of relevant tools, terminology, and practical negotiation tactics.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Learn about negotiation vocabularies like BATNA, Reservation Price, Trip Wire, Bargaining Zone, and Target</li>
                            <li>Learn about the two dimensions of negotiation – the distribution and integration side (how to divide and expand the pie)</li>
                            <li>Understand the concept of logrolling</li>
                            <li>Create more situations where win-win is a possibility</li>
                            <li>Manage your emotions more effectively in negotiation situations</li>
                        </ul>
                        <h3>Financial Acumen</h3>
                        The session helps in harnessing key financial strategies for success. Also, it helps in the use of financial frameworks to enhance investment choices.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Margin vs turnover, Operating Leverage &amp; Financial Leverage</li>
                            <li>Understand how to evaluate capital investments; key cash flow concepts; decision making tools, payback period and its cut off rule</li>
                            <li>Fundamentals of understanding the income statement &amp; balance sheet, Return on assets, sales revenue and net income</li>
                            <li>Application of financial ratios, understanding the company’s financial position, performance, and prospects</li>
                        </ul>
                        <h3>Leading in Crisis</h3>
                        The session demonstrates how you as leaders must understand and counteract the impacts of the VUCA world to lead more effectively.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Leading in a VUCA world</li>
                            <li>How to continually evaluate, adjust and build an offensive mindset in the modern environment</li>
                            <li>Demonstrating clear strategy and guidance to the organization</li>
                            <li>Keep an eye on the future by Assessing; Adapting and Sustaining Momentum</li>
                            <li>How to align systems processes and build the ability to communicate</li>
                        </ul>
                        <h3>Leading Innovation</h3>
                        The session focuses on the reasons and mechanisms why crisis causes you to resort to your most ingrained behaviors—behaviors that are the antithesis of innovation.
                        <br>
                        <br>
                        <strong>Takeaways:&nbsp;</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Understand and eliminate barriers to innovation</li>
                            <li>How to drive innovation in your organization</li>
                        </ul>
                    </div>
                </div>

                <button name="show more details" aria-label="Show more details" class="cbtn-outline mt-5" data-target="2" onclick="toggleReadMore(this)">Read more</button>
            </div>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    Year long access to 2000+ Courses
                </h3>
                <p>
                    Choose from over 2000+ courses that will enhance your knowledge and skills across business functions. With unlimited access to Cornell’s resource library, you will have the opportunity to learn something new, every day.
                </p>
                <h3>
                    Regular assessments and leaderboard
                </h3>
                <p>
                    Post-work assignments/tasks will be given after each session to enhance your skills on each topic taught during the LIVE session. The leaderboard scores you against your peers in the learning journey.
                </p>
                <h3>
                    Peer coaching and feedback
                </h3>
                <p>
                    Learn from high-achieving peers from around the globe and build your network. The cohort will be divided into triads. You will get a chance to interact, share and exchange ideas with your peers.
                </p>
            </div>
            <figure class="w-full">
                <?php $image_id = 849;
                echo wp_get_attachment_image($image_id, "large", false, [
                    "loading" => "lazy",
                    "class" => "image-contain",
                ]); ?>
                <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
            </figure>
        </div>
    </section>
    <section class="section-y px-0">
        <div class="section-x">
            <h2 class="text-center">Faculty from Cornell</h2>
        </div>
        <div class="relative">
            <button name="slide previous" aria-label="slide previous" class="slick-1-prev group md:left-12 left-2 slick-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="rotate-180 group-hover:scale-125 transition-all" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>
            <button name="slide next" aria-label="slide next" class="slick-1-next group md:right-12 right-2 slick-btn">
                <svg class="group-hover:scale-125 transition-all" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>

            <div class="slick-slider-1 section-x relative z-0">

                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Allan_Filipowicz')" class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 752;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Allan Filipowicz</p>
                    <p class="mb-2 text-left text-sm">Clinical Professor of Management and Organisations</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Laura_Chulak_Georgianna')" class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 854;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Laura Chulak Georgianna</p>
                    <p class="mb-2 text-left text-sm">Senior Lecturer, Management and Organizations</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Neil_Tarallo')" class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 851;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Neil Tarallo</p>
                    <p class="mb-2 text-left text-sm">Senior Lecturer of Entrepreneurship</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('General_George_Casey')" class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 852;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">General George Casey</p>
                    <p class="mb-2 text-left text-sm">Senior Faculty of Leadership</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Tony_Simons')" class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 853;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Tony Simons</p>
                    <p class="mb-2 text-left text-sm">Professor of Innovation & Dynamic Management</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Michelle_Duguid')" class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 850;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Michelle Duguid</p>
                    <p class="mb-2 text-left text-sm">Associate Dean of Diversity, Inclusion, and Belonging & Associate Professor of Management and Organisations</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Derek_Cabrerra')" class="cursor-pointer bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 746;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Derek Cabrerra</p>
                    <p class="mb-2 text-left text-sm">Systems Scientist</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Gautam_Ahuja')" class="cursor-pointer bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 751;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Gautam Ahuja</p>
                    <p class="mb-2 text-left text-sm">Professor of Management and Organisations</p>
                </div>
            </div>
        </div>
        <div class="section-x">
            <p class="text-xs text-center mt-8">
                Indicative faculty, subject to change based on availability and university guidelines
            </p>
        </div>
    </section>
    <section class="relative md:h-[800px] h-[550px] px-0 section-y">
        <div>
            <h2 class="text-center">Certificate</h2>
            <figure class="mx-auto md:w-1/2 w-11/12 h-full relative z-0">
                <?php $image_id = 856;
                echo wp_get_attachment_image($image_id, "large", false, [
                    "loading" => "lazy",
                    "class" => "image-contain",
                ]); ?>
                <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
            </figure>
        </div>
        <div class="text-white flex items-end section absolute -z-10 bottom-0 right-0 md:h-1/3 h-2/3 w-full bg-primary">
            <div class="text-sm">
                <p>
                    <em>
                        Upon successful completion of the program, you will earn a certificate of completion from Cornell University
                        <br>
                        Note: Certificate image is for illustrative purposes only and may be subject to change at the discretion of Cornell University.
                    </em>
                </p>
            </div>
        </div>
    </section>
    <section class="section-y px-0">
        <div class="section-x">
            <h2 class="text-center">Testimonials</h2>
        </div>
        <div class="relative">
            <button name="slide previous" aria-label="slide previous" class="slick-1-prev group md:left-12 left-2 slick-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="rotate-180 group-hover:scale-125 transition-all" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>
            <button name="slide next" aria-label="slide next" class="slick-1-next group md:right-12 right-2 slick-btn">
                <svg class="group-hover:scale-125 transition-all" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>

            <div class="slick-slider-1 section-x relative z-0">
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 865;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"Very experienced faculty with deep understanding of their respective subjects."</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Deepak Agarwal</p>
                            <p class="mb-2 text-sm">CEO, Kotak Mahindra UK Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 864;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"All the LIVE sessions were beneficial. It was a great learning experience. Recommend for senior leaders across industries"</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Tareq Alzagha</p>
                            <p class="mb-2 text-sm">Implementation Manager, YAS Holding</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 863;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"Great program, one of the best experiences"</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Mohamed Karim BENNIS</p>
                            <p class="mb-2 text-sm">Group CFO, Etisalat Group</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 862;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"Amazing program with enriching content, engaging LIVE session delivered by renowned Cornell faculty"</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Rahul Rajpal</p>
                            <p class="mb-2 text-sm">Director, Google</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 861;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"Succinct yet in-depth sessions by renowned Cornell faculty, all 100% LIVE. Very informative and enriching 6 months learning journey."</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Dr. Anu Jacob</p>
                            <p class="mb-2 text-sm">Director, Cleveland Clinic</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 860;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"I enjoined the 6 months program and learned from all the sessions. Professors shared their experiences and case studies that really helped."</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Roger Marti</p>
                            <p class="mb-2 text-sm">Director Of Operation, IHG Hotels and Resorts</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 859;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"Excellent program. Courses were tailor-made to equip CXOs to face real-world issues and challenges while leading their organizations in today’s unpredictable climate.
                                    The availability of 2000+ on-demand electives on all possible topics is mind-boggling.
                                    Professors are experts in their domain with excellent industry connections."</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Jacob Mathew</p>
                            <p class="mb-2 text-sm">Chief Operating Officer, Adani Welspun Exploration Limited</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 858;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"Overall learning experience is very good.
                                    Professors have rich experience and they delivered their lectures very well. They used real life examples and cases to help us understand the topic."</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Siddharth Giri</p>
                            <p class="mb-2 text-sm">Director, Hdfc bank</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 858;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"An excellent program. No doubt about it. Learned a lot."</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Eduardo Aspillaga</p>
                            <p class="mb-2 text-sm">Digital Transformation Strategy Lead, IBM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <div class="border-2 rounded-xl border-primary border-solid mx-auto md:w-1/2 md:p-10 p-5 text-center">
                <h2>Who Should Apply?</h2>
                <p> The Cornell CXO Leadership Program caters to senior executives and leaders from diverse geographical locations, functional backgrounds, and industries, aiming to elevate their professional growth and excel in the ever-changing business landscape. This program is tailored for individuals seeking to enhance their strategic and leadership skills, providing a transformative experience that equips them to propel their organizations to new heights of accomplishment. </p>

                <ul class="list-none p-0 text-left">
                    <li class="flex items-center gap-2">
                        <figure class="aspect-square size-9 shrink-0">
                            <?php $image_id = 765;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure> 10+ years of work experience and proven success in leading high performing teams / impactful projects
                    </li>
                    <li class="flex items-center gap-2">
                        <figure class="aspect-square size-9 shrink-0">
                            <?php $image_id = 765;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure> Have at least a Graduate degree
                    </li>
                    <li class="flex items-center gap-2">
                        <figure class="aspect-square size-9 shrink-0">
                            <?php $image_id = 765;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure> Country of residence at the time of enrolling must be Latin America, South Asia, Middle East, Africa, Far East
                    </li>
                </ul>
                <a href="/eligibility" class="cbtn-primary mx-auto">Apply Now</a>
            </div>
        </div>
        <div class="mt-10">
            <h2 class="text-center">
                Inquire for your organization
            </h2>
            <p>

                We feel that taking this program with your colleagues facilitates communication and accelerates impact in your organization. This also helps in having meaningful discussions with each other.
                <br><br>
                Learn with your colleagues and friends. We offer special discounts for groups
            </p>
            <a href="/get-in-touch" class="mx-auto mb-5 cbtn-outline">Get In Touch</a>
            <p>
                Please note that in the event of a global or regional catastrophe, or any unforeseen circumstances, the Program’s schedule, delivery method, faculty, and associated elements are subject to change at the sole discretion of the university.
            </p>
        </div>
    </section>
</article>

<!-- modals -->
<div id="emi_form_modal" class="modal-custom">
    <div class="modal-content">
        <h2 class="text-center">Avail affordable EMI options & advance your professional learning journey</h2>
        <?php echo do_shortcode('[wpforms id="766"]'); ?>
    </div>
    <div class="c-backdrop">
        <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
            </svg></button>
    </div>
</div>
<div id="Michelle_Duguid" class="modal-custom">
    <div class="modal-content">
        <div class="flex md:flex-row flex-col md:gap-10 gap-5">
            <div class="basis-1/3">
                <figure class="aspect-square w-full">
                    <?php $image_id = 850;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-cover",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                </figure>
            </div>
            <div class="flex-1">
                <h2 class="mb-2">
                    Michelle Duguid
                </h2>
                <h5 class="text-third">
                    Associate Dean of Diversity, Inclusion, and Belonging & Associate Professor of Management and Organisations
                </h5>
                Michelle M. Duguid is Associate Dean of Diversity, Inclusion, and Belonging and an associate professor of management and organizations at the Samuel Curtis Johnson Graduate School of Management at Cornell University. She received her MS and PhD in organizational behavior from Cornell University. She serves on the editorial board of Organization Science, the Academy of Management Journal, the Academy of Management Review, and Personnel Psychology.
            </div>
        </div>
    </div>
    <div class="c-backdrop">
        <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
            </svg></button>
    </div>
</div>
<div id="Tony_Simons" class="modal-custom">
    <div class="modal-content">
        <div class="flex md:flex-row flex-col md:gap-10 gap-5">
            <div class="basis-1/3">
                <figure class="aspect-square w-full">
                    <?php $image_id = 853;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-cover",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                </figure>
            </div>
            <div class="flex-1">
                <h2 class="mb-2">
                    Tony Simons
                </h2>
                <h5 class="text-third">
                    Professor of Innovation & Dynamic Management
                </h5>
                Tony Simons, the Louis B. Schaeneman Jr. Professor of Innovation & Dynamic Management, teaches organizational behavior, negotiation and leadership at the Cornell School of Hotel Administration. His research examines trust and credibility as relational, individual and collective qualities. Simons' research has focused on how well people are seen as keeping their word–delivering on their promises and living espoused values. His research and consulting work supports managers in meeting this challenge. He speaks, trains, consults, and designs surveys for organizations both within and beyond the hospitality industry.
            </div>
        </div>
    </div>
    <div class="c-backdrop">
        <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
            </svg></button>
    </div>
</div>
<div id="General_George_Casey" class="modal-custom">
    <div class="modal-content">
        <div class="flex md:flex-row flex-col md:gap-10 gap-5">
            <div class="basis-1/3">
                <figure class="aspect-square w-full">
                    <?php $image_id = 852;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-cover",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                </figure>
            </div>
            <div class="flex-1">
                <h2 class="mb-2">
                    General George Casey
                </h2>
                <h5 class="text-third">
                    Senior Faculty of Leadership
                </h5>


                General George Casey is an accomplished soldier and an authority on strategic leadership. As the Army Chief of Staff, he led one of the nation's largest and most complex organizations during one of the most extraordinary periods in our history. Currently, he lectures internationally on leadership to the leaders of national and multinational corporations and at other business schools. He has broad international experience. Born in Japan, he served in operational assignments in Europe, the Balkans, and the Middle East.
            </div>
        </div>
    </div>
    <div class="c-backdrop">
        <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
            </svg></button>
    </div>
</div>
<div id="Neil_Tarallo" class="modal-custom">
    <div class="modal-content">
        <div class="flex md:flex-row flex-col md:gap-10 gap-5">
            <div class="basis-1/3">
                <figure class="aspect-square w-full">
                    <?php $image_id = 851;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-cover",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                </figure>
            </div>
            <div class="flex-1">
                <h2 class="mb-2">
                    Neil Tarallo
                </h2>
                <h5 class="text-third">
                    Senior Lecturer of Entrepreneurship
                </h5>


                Neil Tarallo is a senior lecturer of entrepreneurship at the Hotel School, SC Johnson College of Business. He previously served as the director of the Cornell University Entrepreneurship Bootcamp for Disabled Veterans. Neil has developed expertise in establishing culture, mindset, and structure for organizations that spurs market driven innovation & entrepreneurial activity. He teaches and have created a broad spectrum of entrepreneurship courses with significant experience developing academic innovation & entrepreneurship programs, including centers and institutes, dating back to 1994. He is also member of a venture capital partnership and an active angel investor.
            </div>
        </div>
    </div>
    <div class="c-backdrop">
        <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
            </svg></button>
    </div>
</div>
<div id="Laura_Chulak_Georgianna" class="modal-custom">
    <div class="modal-content">
        <div class="flex md:flex-row flex-col md:gap-10 gap-5">
            <div class="basis-1/3">
                <figure class="aspect-square w-full">
                    <?php $image_id = 854;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-cover",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                </figure>
            </div>
            <div class="flex-1">
                <h2 class="mb-2">
                    Laura Chulak Georgianna
                </h2>
                <h5 class="text-third">
                    Senior Lecturer, Management and Organizations
                </h5>

                Laura Chulak Georgianna is a distinguished leader in organizational development and executive education, currently serving as the Executive Director of Leadership Programs at Cornell University's Johnson Graduate School of Management. With extensive experience in developing leadership capabilities, Laura has designed and overseen a wide range of initiatives that enhance team effectiveness, resilience, and leadership growth. Her expertise spans across various industries, including global pharmaceuticals and IT services, where she has led transformative organizational changes and strategic cultural transitions. As a Senior Lecturer, Laura imparts practical leadership skills through experiential learning, including high-stakes expeditions and intensive coaching programs. Her robust background in organizational capability and development positions her as a trusted advisor and educator for senior executives seeking to elevate their leadership impact.
            </div>
        </div>
    </div>
    <div class="c-backdrop">
        <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
            </svg></button>
    </div>
</div>
<div id="Allan_Filipowicz" class="modal-custom">
    <div class="modal-content">
        <div class="flex md:flex-row flex-col md:gap-10 gap-5">
            <div class="basis-1/3">
                <figure class="aspect-square w-full">
                    <?php $image_id = 752;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-cover",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                </figure>
            </div>
            <div class="flex-1">
                <h2 class="mb-2">
                    Allan Filipowicz
                </h2>
                <h5 class="text-third">
                    Clinical Professor of Management and Organisations
                </h5>

                Allan Filipowicz teaches Managing and Leading Organizations, Negotiations, Executive Leadership and Development, Leading Teams and Critical and Strategic Thinking. He was also a Former Dean for Executive Education. He has recently won a Best Core Faculty award. He has taught executives across the globe. His professional experience includes banking and consulting, including running his own boutique consulting firm and four years with the Boston Consulting Group in Paris.
            </div>
        </div>
    </div>
    <div class="c-backdrop">
        <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
            </svg></button>
    </div>
</div>
<div id="Derek_Cabrerra" class="modal-custom">
    <div class="modal-content">

        <div class="flex md:flex-row flex-col md:gap-10 gap-5">
            <div class="basis-1/3">
                <figure class="aspect-square w-full">
                    <?php $image_id = 746;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-cover",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                </figure>
            </div>
            <div class="flex-1">
                <h2 class="mb-2">
                    Derek Cabrerra
                </h2>
                <h5 class="text-third">
                    Systems Scientist
                </h5>
                Derek Cabrera is an internationally known systems scientist who in 2021 was inducted as a Member of the International Academy for Systems and Cybernetic Sciences (IASCYS) for outstanding contributions to the field. He is the Faculty Director for the Graduate Certification Program in Systems Thinking, Modeling, and Leadership and is a senior scientist at Cabrera Research Lab. Cabrera has developed a suite of systems thinking tools for use in academia, business, and beyond including the first validated personal inventory of systems thinking.
            </div>
        </div>
    </div>
    <div class="c-backdrop">
        <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
            </svg></button>
    </div>
</div>
<div id="Gautam_Ahuja" class="modal-custom">
    <div class="modal-content">

        <div class="flex md:flex-row flex-col md:gap-10 gap-5">
            <div class="basis-1/3">
                <figure class="aspect-square w-full">
                    <?php $image_id = 751;
                    echo wp_get_attachment_image($image_id, "medium", false, [
                        "loading" => "lazy",
                        "class" => "image-cover",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell CXO or XED website image"; ?></figcaption>
                </figure>
            </div>
            <div class="flex-1">
                <h2 class="mb-2">
                    Gautam Ahuja
                </h2>
                <h5 class="text-third">
                    Professor of Management and Organisations
                </h5>

                Gautam Ahuja teaches strategy and competitive analysis. In 2016, he received the BPS Wiley Outstanding Educator Award for his lifetime teaching contributions. At Cornell, he has received the Cornell-Tech Best Professor Award as well as the Johnson Graduate School of Management’s Apple Award. His research interests include competitive analysis, technology and innovation, globalization, and the use of inter-organizational arrangements such as mergers, acquisitions, and alliances in these contexts.
            </div>
        </div>
    </div>
    <div class="c-backdrop">
        <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
            </svg></button>
    </div>
</div>

<div class="overlay fixed bottom-0 left-0 z-[999] w-full bg-white/85 py-3 flex justify-center backdrop-blur">
    <a href="/#get-brochure" class="cbtn-primary">Download Brochure</a>
</div>



<?php get_footer(); ?>