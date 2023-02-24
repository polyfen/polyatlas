<!DOCTYPE html>
<html lang="en">

<!-- INCLUDE HEAD.PHP start -->
  <?php include 'sections/head.php';?>
<!-- INCLUDE HEAD.PHP end -->

  <body id="digital-product-development-container" class="light-theme">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKN32JZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- INCLUDE HEADER.PHP start -->
      <?php include 'sections/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <!-- INCLUDE SIDEBAR.PHP start -->
      <?php include 'sections/sidebar.php';?>
    <!-- INCLUDE SIDEBAR.PHP end -->

    <!-- INCLUDE HEADER.PHP start -->
      <?php include 'sections/version-banner.php';?>
      <?php include 'sections/about-banner.php';?>
      <?php include 'sections/poly-forum-banner.php';?>
      <?php include 'sections/donations.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <div class="container-fluid">
      <div class="row">
        <div id="content" style="width:100%; max-width: 750px;">

        <div id="poly-atlas-heading">
          <a href="../"><img id="poly-atlas-logo" src="imgs/poly-atlas.svg" style="background:none !important;box-shadow:none;height:50px;width:auto;"><img id="poly-atlas-negative-logo" src="imgs/poly-atlas-negative.svg" style="background:none !important;box-shadow:none;height:50px;width:auto;"></a>
          <a id="github-link" href="https://github.com/The-Poly-Group/poly-atlas" target="_blank" style="float: right;color: #FFFFFF88;"><i class="fa-brands fa-github" style="margin-right: 2px;"></i> an open-source project</a>
          <a id="slack-link" href="https://polyforum.org/join" target="_blank" style="float: right;color: #FFFFFF88;"><i class="fa-brands fa-slack" style="margin-right: 2px;"></i> join our community on Slack</a>
        </div>
        <hr class="second-separator first-separator">
        

      
        <h2 id="digital-product-development">5. Digital Product Development</h2>
        <p>Wether you're planning to develop a simple institutional website, an e-commerce or blog, a web app, or a mobile app, the User Experience Design process is essentially the same.</p>
        <small>The Poly Group</small>
        <img src="imgs/ux-documentation.jpg">
        <p>For reference, you can browse the UX documentation we did for Polyfen's website at <a href="http://polyfen.com/ux" target="_blank">polyfen.com/ux</a>.</p>
        <hr class="second-separator">
        <h3 id="user-stories">5.1. User Stories</h3>
        <small>Task</small>
        <h4>List the User Stories</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>0.5&thinsp;&ndash;&thinsp;2 hours</p>
        <small>Description</small>
        <p>The first step is to consider the needs of you Brand's User Personas, as we've defined here in the section <a href="#target-public-analysis">3.1. Target public analysis</a> of the Business Development process. Especially, consider their (1) Occupation, (2) Unsatisfied need, and (3) Solution offered by the business.</p>
        <p>Then list those specification following the format "As a [Occupation], I need [Solution], so that I can [Unsatisfied need]."</p>
        <p>Keep in mind that a single User Persona may have more than one User Story based on their Unsatisfied needs. Additionally, one same User Story might apply to more than one Persona.</p>
        <small>The Poly Group</small>
        <p>You might find it useful to start with the User Story that is most closely related to your Business goals. For instance, for us at Polyfen would be to get our prospective clients to contact us through a contact form. And then, you can consider all the secondary information and features they would need.</p>
        <table>
          <tbody>
            <tr>
              <th>Personas</th>
              <td><strong>Business Brandon</strong> & <strong>Recruiter Mary</strong></td>
            </tr>
            <tr>
              <th>User Stories</th>
              <td>
                <table>
                  <tr>
                    <td><strong>As a</strong> Business Executive&thinsp;/&thinsp;Recruiter, <strong>I need to</strong> contact a Branding agency, <strong>so that I can</strong> purchase their services to improve my business’ Brand.</td>
                  </tr>
                  <tr>
                    <td><strong>As a</strong> Business Executive&thinsp;/&thinsp;Recruiter, <strong>I need to</strong> learn more about the Branding agency, <strong>so that I can</strong> decide if I trust them enough to contact them.</td>
                  </tr>
                  <tr>
                    <td><strong>As a</strong> Business Executive&thinsp;/&thinsp;Recruiter, <strong>I need to</strong> see a breakdown of the agency’s services, <strong>so that I can</strong> understand which services I specifically need.</td>
                  </tr>
                  <tr>
                    <td style="border-bottom:none;"><strong>As a</strong> Business Executive&thinsp;/&thinsp;Recruiter, <strong>I need to</strong> see the agency’s previous work, <strong>so that I can</strong> decide if their services are up to my quality standards.</td>
                  </tr>
                </table>
              </td>
            </tr>
          </tody>
        </table>
        <hr class="second-separator">
        <h3 id="user-journey">5.2. User Journey</h3>
        <small>Task</small>
        <h4>List the User Journey steps</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>0.5&thinsp;&ndash;&thinsp;2 hours</p>
        <small>Description</small>
        <p>Taking the User Stories into consideration, list the necessary steps that a User would have to perform in order to complete his&thinsp;/&thinsp;her final goal.</p>
        <p>The User Journey is pretty straight-forward for a simple institutional website, for instance: (1) <strong>Awareness</strong>, the first contact with your Brand and considering entering the website. Think of the context. Where is the user most likely to find your brand? is it on social media, a Google search, other?, (2) <strong>Consideration</strong>, entering and browsing the website. Think of which information would take to convince the user to fulfil his&thinsp;/&thinsp;her goal. and (3) <strong>Conversion</strong>, completing the desired goal, i.e., filling out the website's contact form.</p>
        <p>However, for a more elaborate application we must consider the steps necessary for the User to Sign-up and use the app's features. In the case of developing an app, we can differentiate two types of User Journeys. (1) <strong>Critical User Journeys</strong>, including downloading the app, signing-up, on-boarding, etc; and (2) <strong>Toothbrush User Journeys</strong>, the activities and features that a user would use recurrently.</p>
        <small>The Poly Group</small>
        <blockquote><strong>1. Awareness</strong><br/>
        The user finds our Brand on social media. For this we will require to generate social media content and promote it to get not only organic reach, but also paid reach through Instagram and LinkedIn campaigns. The ads for our Primary target group should attract prospective consumers by enticing our services and showing how they can benefit from our services with the aim of leading them to enter our website.<br/><br/>
        <strong>2. Consideration</strong><br/>
        Enticed by our social media content, the user enters our website with the aim of learning more about our service offer. For this our website must have an informative About section, Case Studies of our work, a breakdown of our Services offer, a Contact Form, and links to our Social Media channels. Additionally, considering the traffic belonging to the Instagram and LinkedIn marketing campaigns, the website should include a bespoke Landing Page offering a valuable solution to the personas, such as a Free Brand Audit by completing a contact form.<br/><br/>
        <strong>3. Conversion</strong><br/>
        The Primary personas should be enticed by our services and fill in our contact form to request a quote for a Branding project.</blockquote>
        <hr class="second-separator">
        <h3 id="user-flow">5.3. User Flow</h3>
        <small>Task</small>
        <h4>Chart the User Flow</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>1&thinsp;&ndash;&thinsp;4 hours</p>
        <small>Description</small>
        <p>Here, once again, there is a critical distinction between a simple institutional website and a more robust digital product with interactive features. A one-page institutional website might not even need a User Flow diagram. On the other hand, if you're developing an e-commerce website or any other kind of web, mobile, or desktop app with interactive features, a User Flow chart would be beneficial.</p>
        <p>A User Flow charts all the steps that a User might take to complete the goals of his User Stories and Journey. However, the difference between listing the steps of the User Journey and diagramming a User Flow is that the Flow considers <strong>every single possible interaction between the User and the Interface</strong>.</p>
        <p>For instance, if a User is registered or not on the app, it might take the Flow might lead the User through a different path.</p>
        <img src="imgs/user-flow.jpg">
        <p>You could easily design your User Flows from scratch, or, if you wanna save some time, you can download User Flow template files such as this paid one <a href="https://ui8.net/neeple/products/wheres-your-flow" target="_blank">ui8.net</a> or some other free alternative.
        <hr class="second-separator">
        <h3 id="information-architecture">5.4. Information Architecture</h3>
        <small>Task</small>
        <h4>Diagram the Information Architecture</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>1&thinsp;&ndash;&thinsp;4 hours</p>
        <small>Description</small>
        <p>Based on the User Stories, Journey, and Flow we can infer which information the web users would require, in which order of priority, and how would that information be organised.</p>
        <p><strong>Think of it as a detailed sitemap.</strong> Which pages should the website or app have? Which sections should each page have? Which type of content would each section have, a Heading, a Paragraph, an Image, a Button?</p>
        <p>Again, you can design your Information Architecture diagram from easily scratch, or you can rely on diagram components template files, there are some free options which you can find online, there are also paid alternatives such as this one published on <a href="https://ui8.net/david-moreno/products/simple-sitemap-kit" target="_blank">ui8.net</a>.</p>
        <small>The Poly Group</small>
        <img src="imgs/information-architecture.jpg">
        <hr class="second-separator">
        <h3 id="content-creation">5.5. Content Creation</h3>
        <small>Task</small>
        <h4>Copywrite the Content</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>2&thinsp;&ndash;&thinsp;8 hours</p>
        <small>Description</small>
        <p>Some Designers might move in to the Wireframing too early and use fake text ("Lorem ipsum") to design the Wireframe. I would highly advice against that. Waiting until you have the real content can make a huge difference in your Wireframes design, since you would have an accurate amount of text and the design can convey real meaning.</p>
        <p>So, once we have the Information Architecture in place, we can understand which headings, paragraphs, and images the digital product will be requiring. Now it's time to copywrite that text and select&thinsp;/&thinsp;design the required images.</p>
        <p>This is a good time to refer to the Brand's <a href="#voice">Voice</a> and <a href="#tone">Tone</a>.</p>
        <p>Pro tip, be sure to keep your texts as concise and straight-forward as possible. Users tend to not read large chunks of text, but rather they just skim it as they scroll down. With the exception of a text-oriented platform such as Wikipedia or this very site.</p>
        <p>Additionally, you would want the text to be compelling and enticing to keep the User browsing your site. Offer the User something of value considering the Persona's Unsatisfied Needs and proposed Solutions. As soon as the User lands on your site, they should immediately understand what your site can offer them just by reading the first heading.</p>
        <p>Grab the User's attention by speaking directly to him&thinsp;/&thinsp;her.</p>
        <img src="imgs/ipad.png">
        <p>After writing the first iteration of the copy, I suggest you read it aloud, make sure to edit out any redundant or unnecessary copy.</p>
        <p>As the last step of the text copywriting, you should revise your copy for spelling and grammatical mistakes. <a href="https://www.grammarly.com/">Grammarly</a> is a specially good tool for this.</p>
        <p>Lastly, this is a good moment to define, besides the text, which visual images your content will be including. You can find references of free stock images at <a href="https://unsplash.com" target="_blank">Unsplash.com</a>. You can also define the requirements for infographics, illustrations, animations, or custom photography at this point for the visual designers to use as a starting brief.</p>
        <small>The Poly Group</small>
        <img src="imgs/content-creation.jpg">
        <p>You can browse the Content Creation document for Polyfen's homepage here: <a href="https://docs.google.com/document/d/1hUwJAaiQR8_tRy5uDBGUPloiV7cBjBkoI8bZ_z9IY2c/edit?usp=sharing" target="_blank">DOC_PLFN_Copy_Homepage</a></p>
        <hr class="second-separator">
        <h3 id="wireframing">5.6. Wireframing</h3>
        <small>Task</small>
        <h4>Hand-draw Wireframes</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>0.5&thinsp;&ndash;&thinsp;2.5 hours</p>
        <small>Description</small>
        <p>The more abstract and simple the Wireframes are the more "lo-fi" or "low-fidelity" it's said they are; Whereas the more detailed and closer to the final visual design of the UI, the more "hi-fi" or "high-fidelity" it's said they are.</p>
        <p>For starters, grab whichever pen and paper you have at hand and get down and dirty testing different lo-fi layouts for your User Interface. Iterate as many variations as possible, without spending too much time on detailing the visuals. Then, select the most suitable sketches.</p>
        <p>Considering that your digital product might be used on screens of a wide variety of resolutions, you might consider how your Wireframe would look like on (1) a mobile screen resolution and (2) on a desktop screen.</p>
        <hr class="third-separator">
        <small>Task</small>
        <h4>Set-up a Grid</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>0.5&thinsp;&ndash;&thinsp;1.5 hours</p>
        <small>Description</small>
        <p>Now we start transitioning from a lower-fidelity hand-drawn Wireframe, to a higher-fidelity digital Wireframe designed on your software of choice, like Figma.</p>
        <p>This is a good time to point out that the layout of the User Interface should be tied to a typographic grid to make the design consistent and optically harmonious.</p>
        <p>In regards to the User Interface layout, me must consider that the majority of web browsing today is statistically substantially larger on mobile devices over desktop devices. Hence, we must ensure that the website is responsive and optimised for different screen sizes, especially for mobile resolutions. This philosophy is known as "mobile-first". Additionally, on the later stage of programming, the website will be likely programmed using a responsive framework such as <a href="https://getbootstrap.com" target="_blank">Bootstrap</a> where the design grid prioritises mobile screens and then moves on gradually to larger screens.</p>
        <p>On the other hand, considering the context of use, some websites or apps might prioritise desktop resolutions, but those cases are rare, and mostly seen on content-heavy products such as Wikipedia or this very site. It's important to understand the context in which your Users will be using your product. On a future stage, once the product is deployed, you can take a look at your analytic metrics and see which are the most common devices that your users use.</p>
        <p>Using <a href="https://getbootstrap.com" target="_blank">Bootstrap's</a> grid as an industry standard accounts for a 12 column grid with 30px gutters.</p>
        <p>The different responsive breakdowns based on <a href="https://getbootstrap.com" target="_blank">Bootstrap's</a> framework include: <strong>(XS)</strong> 375px wide (the width of an iPhone 6) and wider, <strong>(S)</strong> 577px (larger phones and small tablets on portrait orientation) and wider, <strong>(M)</strong> 769px (small tablets on landscape orientation) and wider, <strong>(L)</strong> 992px (large tablets and small notebooks) and wider, <strong>(XL)</strong> 1200px (medium sized notebooks) and wider, and &mdash;while it's not on the default breakpoints&mdash; we can also include a larger resolution which is common, <strong>(XXL)</strong> 1680px (15.4" notebooks and desktop monitors) and wider.</p>
        <p>Lastly, we must consider how much of the UI will be displayed "Above the Fold", that means on the top of the page, what the user sees before having to scroll down. This is important to define what is the most important information that the user should see first. ATF dimensions can vary widely from device to device; However, here are some values that can be taken as reference: <strong>(XS)</strong> 667px high (the height of an iPhone 6) and higher, <strong>(S)</strong> 1024px (the height of an iPad mini on portrait orientation) and higher, <strong>(M)</strong> 1194px (the height of an 11" iPad Pro on portrait orientation) and higher, <strong>(L)</strong> 834px (the height of an 11" iPad Pro on landscape orientation) and higher, <strong>(XL)</strong> 768px (the height of an 11" computer) and higher, <strong>(XXL)</strong> 1050px (the height of a 15.4" computer) and higher.</p>
        <small>Template Files</small>
        <img src="imgs/grid.jpg">
        <p>The grid we tend to use is based on Bootstrap's columns but with margins both sides to centre the content in a container with the following proportions: <strong>(XS)</strong> 10px margin (355px wide), <strong>(S)</strong> 20px margin (537px wide), <strong>(M)</strong> 40px margin (689px wide), <strong>(L)</strong> 60px margin (872px wide), <strong>(XL)</strong> 80px margin (1040px wide), <strong>(XXL)</strong> minimum 100px margin (fixed 1480px wide).</p>
        <p><strong>Download ›</strong> <a href="downloads/UI_PLAT_Bootstrap-Grid.fig" target="_blank">UI_PLAT_Bootstrap-Grid.fig</a></p>
        <hr class="third-wireframe">
        <small>Task</small>
        <h4>Set-up a Digital Wireframe</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>1&thinsp;&ndash;&thinsp;4 hours</p>
        <small>Description</small>
        <p>This doesn't mean that you have to take the time to design wireframes for each one of the six individual resolution breakpoints. You can, for instance, Wireframe the smallest resolution <strong>(XS)</strong> 375px wide and the highest resolution <strong>(XXL)</strong> 1680px; you can later take care of the remaining resolutions on the Design Comps stage.</p>
        <p>I suggest you minimise your workload by using some kind of Wireframe components templates. There are some free templates online, or you can find paid Wireframe Kit templates at websites such as <a href="https://ui8.net/category/wireframe-kits" target="_blank">ui8.net</a>.</p>
        <p>Alternatively, there are also digital platforms which specialise on Wireframing, such as <a href="https://balsamiq.com/" target="_blank">Balsamiq.com</a>.</p>
        <hr class="second-separator">
        <h3 id="design-comps">5.7. Design Comps</h3>
        <small>Task</small>
        <h4>Design a Styleguide</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>1&thinsp;&ndash;&thinsp;4 hours</p>
        <small>Description</small>
        <p>Now that we have our Wireframe's layouts in place, we must start considering applying our Visual Identity to the Wireframes.</p>
        <p>Design a Styleguide including the typographic styles for your headings and body text, think about how your buttons are going to look by default and on hover, what about secondary buttons, input fields, etc.</p>
        <small>The Poly Group</small>
        <img src="imgs/styleguides.jpg">
        <hr class="third-separator">
        <small>Task</small>
        <h4>Apply the Styleguide to your Wireframes</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>1&thinsp;&ndash;&thinsp;6 hours</p>
        <small>Description</small>
        <p>We can now finalise the visual design of our UI by applying the styles define, adding custom photography and illustrations, and finally, fine-tuning the overall design.</p>
        <p>If you have only designed a couple of responsive of breakpoints for the Wireframes, like <strong>(XS)</strong> 375px wide and the highest resolution <strong>(XXL)</strong> 1680px; Then, now is the time to define how the UI design will look on the remaining breakpoints <strong>(S)</strong> 577px, <strong>(M)</strong> 769px, <strong>(L)</strong> 992px, and <strong>(XL)</strong> 1200px.</p>
        <small>The Poly Group</small>
        <img src="imgs/design-comps.jpg">
        <hr class="second-separator">
        <h3 id="prototyping">5.8. Prototyping</h3>
        <small>Task</small>
        <h4>Prototype the User Interface</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>1&thinsp;&ndash;&thinsp;6 hours</p>
        <small>Description</small>
        <p>Prototyping allows you add some basic interactivity to your static UI Designs and put them to a test and see if there are any pain-points that should be solved. Additionally, it helps the programmers understand how you want your UI to interact with the user.</p>
        <p>Some design tools, like Figma, have built-in Prototyping features. Alternatively, you can use a custom Prototyping tool such as <a href="http://invision.com" target="_blank">InVision</a> or <a href="https://marvelapp.com/" target="_blank">Marvel</a>.</p>
        <hr class="second-separator">
        <h3 id="testing">5.9. Usability Testing</h3>
        <small>Task</small>
        <h4>Choose a Usability Testing Method</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>0.5&thinsp;&ndash;&thinsp;1.5 hours</p>
        <small>Description</small>
        <p>First of all, Testing should be a continuous practice built into the Branding process not only for the Digital Product Development, but also to Test the Brand Perception and improve the perceived value of your Brand Identity. However, at this point we'll be focusing on Testing the Usability of your Digital Product. Also, some UX Designers encourage the Design community to also put the Wireframes to a Test, before moving on to the Design Comps.</p>
        <p>There are many different ways to put your designs to a test and validate your User Stories, or if necessary, define which changes need to be made to the design.</p>
        <p>An important statistic to keep in mind at this point is that, according to usability experts Jakob Nielsen and Tom Landauer:</p>
        <blockquote>By testing with just five users, you can uncover 85% of the usability issues with a product.</blockquote>
        <p>Keep in mind however, that the sample of Test Subjects that you use should be directly related to the User Personas you've defined for your product.</p>
        <p>Now, in regards to the Testing Method, there are multiple options that can be chosen depending on the scope, timeframe, and budget of the Digital Product Development project. Additionally, some Testing Methods can be performed in-person or remotely, and they can also be either moderated, with more intervention by the Researchers, or unmoderated, with less intervention by the Researches. Namely:</p>
        <h4>1. Card Sorting</h4>
        <div class="indent">
          <p>Card Sorting is especially useful for evaluating the Information Architecture of the Product. The Test consist on writing the different topics, features, or sections of your Digital Product and allowing the Users to sort them in different groups.</p>
        </div>
        <h4>2. Goal-Driven Session</h4>
        <div class="indent">
          <p>This technique involves giving the Users a Goal and getting them to use the Product trying to fulfil it. The Goal given to each group of Users can be directly related to the User Stories and User Journey defined for each User Persona. At this time, you would document any problems that the Users might encounter during the Session. Does it take them too long to find the button that they need? Is the Copywriting misleading them somehow? Are there elements of the UI that they find intrusive?</p>
          <p>Additionally, a kind of Goal-Driven testing technique is what's known as "The 5 Seconds Test"; Where you show the Users your Digital Product for just 5 seconds and then ask them what do they remember from it. This is particularly useful for Testing the Usability of the Above the Fold section. Do your users immediately understand what your website is about as soon as they land on it? Are they enticed to learn more about your offer or are they inclined to reject your offer?</p>
        </div>
        <p>Note that you don't have to choose between one Testing Method or the other; You can use both, since each Method has its benefits for different purposes.</p>
        <p>There are also other Testing Methods that are useful to gauge the Users' perception of your Digital Product. However, there is a distinction between (1) <strong>Usability Testing</strong>, which ensures that your Users fulfil their goals successfully and identifies potential functionality issues, and (2) <strong>Perception Testing</strong>, which essentially measure how likely a User is to want to use or buy your offer. Note that some Testing Methods, especially A&thinsp;/&thinsp;B Testing and Heatmaps fall somewhere in between Usability and Perception Testing. Note also that, while Usability Testing can be done with just 5 users, Perception Testing is an aggregate of all your Users.</p>
        <p>However, for reference, Perception Testing Methods might include:</p>
        <h4>3. A/B Testing</h4>
        <div class="indent">
          <p>Exposing different Users to different versions of your Product (for instance, one with green buttons and another one with red buttons), and measuring which one has the most success.</p>
        </div>
        <h4>4. Heatmaps</h4>
        <div class="indent">
          <p>Heatmaps present Users' behaviour on a website by highlighting the areas where they pay the most attention and pointing out the areas Users ignore more.</p>
        </div>
        <h4>5. Analytics</h4>
        <div class="indent">
          <p>Analytics track your Product's traffic and are a great way to validate your demographic stats (making sure your User Personas represent your actual Users) and evaluate your behaviour stats (which pages on your site are the most visited, how long do users stay on your site before leaving, where are your users coming from, which device they're using, ...).</p>
          <p>Analysing your Analytic metrics should be a continuous practice.</p>
        </div>
        <h4>6. Interviews, Surveys, and Focus Groups</h4>
        <div class="indent">
          <p>Interviews and Surveys should be included in the Usability Testing Script during the Testing sessions. However, in regards to the Perception Testing, the Interviews, Surveys, and Focus Groups can inquire more broadly in regards to how your Target Public feels about your Brand Identity or your Digital Product.</p>
        </div>
        <hr class="third-separator">
        <small>Task</small>
        <h4>Write a Script for your Tests</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>1&thinsp;&ndash;&thinsp;4 hours</p>
        <small>Description</small>
        <p>Whether you decide to use Card Sorting tests, Goal-Driven tests, or both, you should prior define a Script laying out what information you will communicate to the Test Subjects before they start the test, during the test, and after the test.</p>
        <hr class="third-separator">
        <small>Task</small>
        <h4>Perform the Usability Testing &amp; Document your Results</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>2&thinsp;&ndash;&thinsp;8 hours</p>
        <small>Description</small>
        <p>As stated above, the Testing can be performed remotely or in-person, moderated or unmoderated.</p>
        <p>A useful tool for performing remote Tests is <a href="https://www.usertesting.com/" target="_blank">UserTesting.com</a>.</p>
        <p>Regardless of your chosen Testing Method, you should be as thorough as possible in documenting your results. If possible, record the screen of your Test Subjects, ask them to speak out load their comments, questions, or concerns while they're performing the tests.</p>
        <hr class="third-separator">
        <small>Task</small>
        <h4>Review your Results &amp; Report your Insights</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>0.5&thinsp;&ndash;&thinsp;1.5 hours</p>
        <small>Description</small>
        <p>Which pain-points did your users found? What can be improved to help them fulfil their goals?</p>
        <hr class="third-separator">
        <small>Task</small>
        <h4>Fine-Tune your UI Designs based on your Reported Insights</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>2&thinsp;&ndash;&thinsp;6 hours</p>
        <small>Description</small>
        <p>Based on your Insights, fine-tune your UI Designs as needed.</p>
        <hr class="second-separator">
        <h3 id="programming">5.10. Programming</h3>
        <small>Task</small>
        <h4>Hand-off your Designs to the Programmers</h4>
        <small>Role</small>
        <p>UX Designer</p>
        <small>Estimated Workload</small>
        <p>0.5&thinsp;&ndash;&thinsp;2 hours</p>
        <small>Description</small>
        <p>At this time, it's necessary to gather all your files, assets, and documentation and send it to the programmers. Ensure that they have a clear idea of how your digital product should work and how it should interact with its Users.</p>
        <p>Some design tools, like Figma, provide the programmers with the CSS code of your design elements. Otherwise, you might opt for using another tool for the Hand-Off process such as <a href="https://zeplin.io/" target="_blank">Zeplin</a> or <a href="https://avocode.com/">Avocode</a>.</p>
        <hr class="third-separator">
        <small>Task</small>
        <h4>Program your Digital Product</h4>
        <small>Role</small>
        <p>Programmer</p>
        <small>Estimated Workload</small>
        <p>12&thinsp;&ndash;&thinsp;60 hours</p>
        <small>Description</small>
        <p>Poly Atlas is a platform aimed particularly to designers and creatives, so odds are your website or Digital Product will be programmed by a professional programmer. However, basic Programming skills are essential for a UX Designer to collaborate better with the programmers, or even to give it a go and program the Digital Product yourself. Perhaps you might not be able to implement any advanced interactive features, but learning <strong>HTML</strong> (defines what content the website will have), <strong>CSS</strong> (defines how the UI elements will look), <strong>Bootstrap</strong> (a responsive framework which adapts your content for different screen sizes), <strong>Github</strong> (a version control system), <strong>cPanel</strong> (allows you to control your web hosting server), and <strong>FTP</strong> (allows you to upload your code to the internet) can empower you as a designer and give you the tools to code a simple institutional website by yourself or even develop a more complex project from end-to-end.</p>
        <p>If you're new to the world of Programming, the basic idea that you'd have to first understand is that there are essentially two types of Programming. <strong>Front-End Programming</strong> is basically translating the visual design of your UI into code for a web browser or device to display it visually. On the other hand, <strong>Back-End Programming</strong> involves the development of interactive features such as a database or other CMS (Content Management System) features. While there are Programmers who specialise on Front-End or Back-End, those Programmers who are fluent in both disciplines are known as "Full-Stack Programmers".</p>
        <p>If you're a UX Designer you will likely find Front-End Programming much more easy and useful, while you can leave Back-End to the pros.</p>
        <p>Here are some sources where you can learn the basics of Front-End Programming:</p>
        <div class="indent">
          <ul>
            <li><a href="https://www.codecademy.com" target="_blank">Codecademy</a></li>
            <li><a href="https://teamtreehouse.com/" target="_blank">Treehouse</a></li>
            <li><a href="https://www.w3schools.com" target="_blank">W3Schools</a></li>
            <li><a href="https://www.udemy.com/courses/search/?src=ukw&q=html%20and%20css" target="_blank">Udemy</a></li>
            <li><a href="https://www.udacity.com/course/front-end-web-developer-nanodegree--nd0011" target="_blank">Udacity</a></li>
            <li><a href="https://www.youtube.com/results?search_query=html+and+css" target="_blank">YouTube</a></li>
          </ul>
        </div>



        <hr>

        <div class="inter-page-navigation">
          <a class="previous-page-title" href="basic-touchpoints.php">
            <small>‹ Previous</small>
            4. Basic Touchpoints
          </a>
          <a class="next-page-title" href="bibliography.php">
            <small>Next ›</small>
            Bibliography
          </a>
        </div>

        <hr>


        </div>
      </div>
    </div>

    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

  </body>
</html>
