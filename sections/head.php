<head>
  <title>Poly Atlas | Wiki</title>


  <!-- META General -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website"/>
  <meta name="author"  content="The Poly Group" />


  <!-- META Page-Specific -->
  <meta property="og:title" content="Poly Atlas"/>
  <meta property="og:url" content="http://polyatlas.wiki"/>
  <meta name="keywords" content="Branding, Brand Identity Design, Graphic Design, Brand Research, Brand Strategy, Guide, Wiki, Framework, Workflow, Creative, Marketing" />
  <meta name="description" property="og:description" content="A guide to brand identity design projects. Our standardised workflow features a step-by-step approach to the brand identity design process, including tips and best practices, template files, and other resources." />
  <meta property="og:image" content="http://polyatlas.wiki/imgs/screenshot.png"/>
  <meta name="robots" content="index,follow">


  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#02bcaa">
  <meta name="msapplication-TileColor" content="#02bcaa">
  <meta name="theme-color" content="#02bcaa">


  <!-- BOOTSTRAP -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  <!-- CSS General -->
  <link rel="stylesheet" href="app/css/general.css" type="text/css">
  <link rel="stylesheet" href="app/css/typography.css" type="text/css">
  <link rel="stylesheet" href="app/css/header.css" type="text/css">
  <link rel="stylesheet" href="app/css/footer.css" type="text/css">
  <link rel="stylesheet" href="app/css/sections.css" type="text/css">
  <link rel="stylesheet" href="app/css/buttons.css" type="text/css">
  <link rel="stylesheet" href="app/css/separators.css" type="text/css">
  <link rel="stylesheet" href="app/css/sections.css" type="text/css">
  <link rel="stylesheet" href="app/css/sidebar.css" type="text/css">
  <link rel="stylesheet" href="app/css/poly-forum-banner.css" type="text/css">
  <link rel="stylesheet" href="app/css/about-banner.css" type="text/css">
  <link rel="stylesheet" href="app/css/version-banner.css" type="text/css">
  <link rel="stylesheet" href="app/css/theme-reset.css" type="text/css">
  <link rel="stylesheet" href="app/css/light-theme.css" type="text/css">
  <link rel="stylesheet" href="app/css/dark-theme.css" type="text/css">
  <link rel="stylesheet" href="app/css/media-queries.css" type="text/css">
  <link rel="stylesheet" href="app/css/cookies.css" type="text/css">

  <!-- CSS Page-Specific-->

  <!-- FONTS -->
  <link rel="stylesheet" href="https://use.typekit.net/equ5vqy.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-WKN32JZ');</script>
  <!-- End Google Tag Manager -->

  <!-- Fullscreen -->
  <script type="text/javascript">
  // mozfullscreenerror event handler
  function errorHandler() {
     alert('mozfullscreenerror');
  }
  document.documentElement.addEventListener('mozfullscreenerror', errorHandler, false);

  // toggle full screen
  function toggleFullScreen() {
    if (!document.fullscreenElement &&    // alternative standard method
        !document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
      if (document.documentElement.requestFullscreen) {
        document.documentElement.requestFullscreen();
      } else if (document.documentElement.mozRequestFullScreen) {
        document.documentElement.mozRequestFullScreen();
      } else if (document.documentElement.webkitRequestFullscreen) {
        document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
      }
    } else {
      if (document.cancelFullScreen) {
        document.cancelFullScreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitCancelFullScreen) {
        document.webkitCancelFullScreen();
      }
    }
  };
  </script>

  <!-- BREADCRUMBS SCRIPT start -->
      <script type="text/javascript">
          $(document).scroll(function() {
              var scroll = $(document).scrollTop();

              var osGettingStarted = $('#getting-started').offset().top;
              var htGettingStarted = $('#getting-started').height();
              if(scroll > osGettingStarted + htGettingStarted ){
                $('#toc-getting-started').addClass('active-toc');
              }
              if(scroll < osGettingStarted + htGettingStarted ) {
                $('#toc-getting-started').removeClass('active-toc');
              }

              var osIntroToBranding = $('#intro-to-branding').offset().top;
              var htIntroToBranding = $('#intro-to-branding').height();
              if(scroll > osIntroToBranding + htIntroToBranding ){
                $('#toc-intro-to-branding').addClass('active-toc');
                $('#toc-getting-started').removeClass('active-toc');
              }
              if(scroll < osIntroToBranding + htIntroToBranding ) {
                $('#toc-intro-to-branding').removeClass('active-toc');
              }

              var osWhatIsABrand = $('#what-is-a-brand').offset().top;
              var htWhatIsABrand = $('#what-is-a-brand').height();
              if(scroll > osWhatIsABrand + htWhatIsABrand ){
                $('#toc-what-is-a-brand').addClass('active-toc');
                $('#toc-intro-to-branding').removeClass('active-toc');
              }
              if(scroll < osWhatIsABrand + htWhatIsABrand ) {
                $('#toc-what-is-a-brand').removeClass('active-toc');
              }

              var osWhatIsBranding = $('#what-is-branding').offset().top;
              var htWhatIsBranding = $('#what-is-branding').height();
              if(scroll > osWhatIsBranding + htWhatIsBranding ){
                $('#toc-what-is-branding').addClass('active-toc');
                $('#toc-what-is-a-brand').removeClass('active-toc');
              }
              if(scroll < osWhatIsBranding + htWhatIsBranding ) {
                $('#toc-what-is-branding').removeClass('active-toc');
              }

              var osWhatIsALogo = $('#what-is-a-logo').offset().top;
              var htWhatIsALogo = $('#what-is-a-logo').height();
              if(scroll > osWhatIsALogo + htWhatIsALogo ){
                $('#toc-what-is-a-logo').addClass('active-toc');
                $('#toc-what-is-branding').removeClass('active-toc');
              }
              if(scroll < osWhatIsALogo + htWhatIsALogo ) {
                $('#toc-what-is-a-logo').removeClass('active-toc');
              }

              var osTerminology = $('#terminology').offset().top;
              var htTerminology = $('#terminology').height();
              if(scroll > osTerminology + htTerminology ){
                $('#toc-terminology').addClass('active-toc');
                $('#toc-what-is-a-logo').removeClass('active-toc');
              }
              if(scroll < osTerminology + htTerminology ) {
                $('#toc-terminology').removeClass('active-toc');
              }

              var osBusinessDevelopment = $('#business-development').offset().top;
              var htBusinessDevelopment = $('#business-development').height();
              if(scroll > osBusinessDevelopment + htBusinessDevelopment ){
                $('#toc-business-development').addClass('active-toc');
                $('#toc-terminology').removeClass('active-toc');
              }
              if(scroll < osBusinessDevelopment + htBusinessDevelopment ) {
                $('#toc-business-development').removeClass('active-toc');
              }

              var osMarketResearch = $('#market-research').offset().top;
              var htMarketResearch = $('#market-research').height();
              if(scroll > osMarketResearch + htMarketResearch ){
                $('#toc-market-research').addClass('active-toc');
                $('#toc-business-development').removeClass('active-toc');
              }
              if(scroll < osMarketResearch + htMarketResearch ) {
                $('#toc-market-research').removeClass('active-toc');
              }

              var osBusinessAnalysis = $('#business-analysis').offset().top;
              var htBusinessAnalysis = $('#business-analysis').height();
              if(scroll > osBusinessAnalysis + htBusinessAnalysis ){
                $('#toc-business-analysis').addClass('active-toc');
                $('#toc-market-research').removeClass('active-toc');
              }
              if(scroll < osBusinessAnalysis + htBusinessAnalysis ) {
                $('#toc-business-analysis').removeClass('active-toc');
              }

              var osTargetPublicAnalysis = $('#target-public-analysis').offset().top;
              var htTargetPublicAnalysis = $('#target-public-analysis').height();
              if(scroll > osTargetPublicAnalysis + htTargetPublicAnalysis ){
                $('#toc-target-public-analysis').addClass('active-toc');
                $('#toc-business-analysis').removeClass('active-toc');
              }
              if(scroll < osTargetPublicAnalysis + htTargetPublicAnalysis ) {
                $('#toc-target-public-analysis').removeClass('active-toc');
              }

              var osIndustryAnalysis = $('#industry-analysis').offset().top;
              var htIndustryAnalysis = $('#industry-analysis').height();
              if(scroll > osIndustryAnalysis + htIndustryAnalysis ){
                $('#toc-industry-analysis').addClass('active-toc');
                $('#toc-target-public-analysis').removeClass('active-toc');
              }
              if(scroll < osIndustryAnalysis + htIndustryAnalysis ) {
                $('#toc-industry-analysis').removeClass('active-toc');
              }

              var osResearchConclusion = $('#research-conclusion').offset().top;
              var htResearchConclusion = $('#research-conclusion').height();
              if(scroll > osResearchConclusion + htResearchConclusion ){
                $('#toc-research-conclusion').addClass('active-toc');
                $('#toc-industry-analysis').removeClass('active-toc');
              }
              if(scroll < osResearchConclusion + htResearchConclusion ) {
                $('#toc-research-conclusion').removeClass('active-toc');
              }

              var osBusinessPlan = $('#business-plan').offset().top;
              var htBusinessPlan = $('#business-plan').height();
              if(scroll > osBusinessPlan + htBusinessPlan ){
                $('#toc-business-plan').addClass('active-toc');
                $('#toc-research-conclusion').removeClass('active-toc');
              }
              if(scroll < osBusinessPlan + htBusinessPlan ) {
                $('#toc-business-plan').removeClass('active-toc');
              }

              var osProductsAndServices = $('#products-and-services').offset().top;
              var htProductsAndServices = $('#products-and-services').height();
              if(scroll > osProductsAndServices + htProductsAndServices ){
                $('#toc-products-and-services').addClass('active-toc');
                $('#toc-business-plan').removeClass('active-toc');
              }
              if(scroll < osProductsAndServices + htProductsAndServices ) {
                $('#toc-products-and-services').removeClass('active-toc');
              }

              var osBrandIdentityDesign = $('#brand-identity-design').offset().top;
              var htBrandIdentityDesign = $('#brand-identity-design').height();
              if(scroll > osBrandIdentityDesign + htBrandIdentityDesign ){
                $('#toc-brand-identity-design').addClass('active-toc');
                $('#toc-products-and-services').removeClass('active-toc');
              }
              if(scroll < osBrandIdentityDesign + htBrandIdentityDesign ) {
                $('#toc-brand-identity-design').removeClass('active-toc');
              }

              var osBrandStrategy = $('#brand-strategy').offset().top;
              var htBrandStrategy = $('#brand-strategy').height();
              if(scroll > osBrandStrategy + htBrandStrategy ){
                $('#toc-brand-strategy').addClass('active-toc');
                $('#toc-brand-identity-design').removeClass('active-toc');
              }
              if(scroll < osBrandStrategy + htBrandStrategy ) {
                $('#toc-brand-strategy').removeClass('active-toc');
              }

              var osVoice = $('#voice').offset().top;
              var htVoice = $('#voice').height();
              if(scroll > osVoice + htVoice ){
                $('#toc-voice').addClass('active-toc');
                $('#toc-brand-strategy').removeClass('active-toc');
              }
              if(scroll < osVoice + htVoice ) {
                $('#toc-voice').removeClass('active-toc');
              }

              var osTone = $('#tone').offset().top;
              var htTone = $('#tone').height();
              if(scroll > osTone + htTone ){
                $('#toc-tone').addClass('active-toc');
                $('#toc-voice').removeClass('active-toc');
              }
              if(scroll < osTone + htTone ) {
                $('#toc-tone').removeClass('active-toc');
              }

              var osKeywords = $('#keywords').offset().top;
              var htKeywords = $('#keywords').height();
              if(scroll > osKeywords + htKeywords ){
                $('#toc-keywords').addClass('active-toc');
                $('#toc-tone').removeClass('active-toc');
              }
              if(scroll < osKeywords + htKeywords ) {
                $('#toc-keywords').removeClass('active-toc');
              }

              var osCreativeConcept = $('#creative-concept').offset().top;
              var htCreativeConcept = $('#creative-concept').height();
              if(scroll > osCreativeConcept + htCreativeConcept ){
                $('#toc-creative-concept').addClass('active-toc');
                $('#toc-keywords').removeClass('active-toc');
              }
              if(scroll < osCreativeConcept + htCreativeConcept ) {
                $('#toc-creative-concept').removeClass('active-toc');
              }

              var osMoodboard = $('#moodboard').offset().top;
              var htMoodboard = $('#moodboard').height();
              if(scroll > osMoodboard + htMoodboard ){
                $('#toc-moodboard').addClass('active-toc');
                $('#toc-creative-concept').removeClass('active-toc');
              }
              if(scroll < osMoodboard + htMoodboard ) {
                $('#toc-moodboard').removeClass('active-toc');
              }

              var osNaming = $('#naming').offset().top;
              var htNaming = $('#naming').height();
              if(scroll > osNaming + htNaming ){
                $('#toc-naming').addClass('active-toc');
                $('#toc-moodboard').removeClass('active-toc');
              }
              if(scroll < osNaming + htNaming ) {
                $('#toc-naming').removeClass('active-toc');
              }

              var osBrandArchitecture = $('#brand-architecture').offset().top;
              var htBrandArchitecture = $('#brand-architecture').height();
              if(scroll > osBrandArchitecture + htBrandArchitecture ){
                $('#toc-brand-architecture').addClass('active-toc');
                $('#toc-naming').removeClass('active-toc');
              }
              if(scroll < osBrandArchitecture + htBrandArchitecture ) {
                $('#toc-brand-architecture').removeClass('active-toc');
              }

              var osKeyMessages = $('#key-messages').offset().top;
              var htKeyMessages = $('#key-messages').height();
              if(scroll > osKeyMessages + htKeyMessages ){
                $('#toc-key-messages').addClass('active-toc');
                $('#toc-brand-architecture').removeClass('active-toc');
              }
              if(scroll < osKeyMessages + htKeyMessages ) {
                $('#toc-key-messages').removeClass('active-toc');
              }

              var osVisualIdentity = $('#visual-identity').offset().top;
              var htVisualIdentity = $('#visual-identity').height();
              if(scroll > osVisualIdentity + htVisualIdentity ){
                $('#toc-visual-identity').addClass('active-toc');
                $('#toc-key-messages').removeClass('active-toc');
              }
              if(scroll < osVisualIdentity + htVisualIdentity ) {
                $('#toc-visual-identity').removeClass('active-toc');
              }

              var osVisualExploration = $('#visual-exploration').offset().top;
              var htVisualExploration = $('#visual-exploration').height();
              if(scroll > osVisualExploration + htVisualExploration ){
                $('#toc-visual-exploration').addClass('active-toc');
                $('#toc-visual-identity').removeClass('active-toc');
              }
              if(scroll < osVisualExploration + htVisualExploration ) {
                $('#toc-visual-exploration').removeClass('active-toc');
              }

              var osLogoSystem = $('#logo-system').offset().top;
              var htLogoSystem = $('#logo-system').height();
              if(scroll > osLogoSystem + htLogoSystem ){
                $('#toc-logo-system').addClass('active-toc');
                $('#toc-visual-exploration').removeClass('active-toc');
              }
              if(scroll < osLogoSystem + htLogoSystem ) {
                $('#toc-logo-system').removeClass('active-toc');
              }

              var osTypefaceSelection = $('#typeface-selection').offset().top;
              var htTypefaceSelection = $('#typeface-selection').height();
              if(scroll > osTypefaceSelection + htTypefaceSelection ){
                $('#toc-typeface-selection').addClass('active-toc');
                $('#toc-logo-system').removeClass('active-toc');
              }
              if(scroll < osTypefaceSelection + htTypefaceSelection ) {
                $('#toc-typeface-selection').removeClass('active-toc');
              }

              var osColourScheme = $('#colour-scheme').offset().top;
              var htColourScheme = $('#colour-scheme').height();
              if(scroll > osColourScheme + htColourScheme ){
                $('#toc-colour-scheme').addClass('active-toc');
                $('#toc-typeface-selection').removeClass('active-toc');
              }
              if(scroll < osColourScheme + htColourScheme ) {
                $('#toc-colour-scheme').removeClass('active-toc');
              }

              var osVisualLanguage = $('#visual-language').offset().top;
              var htVisualLanguage = $('#visual-language').height();
              if(scroll > osVisualLanguage + htVisualLanguage ){
                $('#toc-visual-language').addClass('active-toc');
                $('#toc-colour-scheme').removeClass('active-toc');
              }
              if(scroll < osVisualLanguage + htVisualLanguage ) {
                $('#toc-visual-language').removeClass('active-toc');
              }

              var osBrandGuidelines = $('#brand-guidelines').offset().top;
              var htBrandGuidelines = $('#brand-guidelines').height();
              if(scroll > osBrandGuidelines + htBrandGuidelines ){
                $('#toc-brand-guidelines').addClass('active-toc');
                $('#toc-visual-language').removeClass('active-toc');
              }
              if(scroll < osBrandGuidelines + htBrandGuidelines ) {
                $('#toc-brand-guidelines').removeClass('active-toc');
              }

              var osBasicTouchpoints = $('#basic-touchpoints').offset().top;
              var htBasicTouchpoints = $('#basic-touchpoints').height();
              if(scroll > osBasicTouchpoints + htBasicTouchpoints ){
                $('#toc-basic-touchpoints').addClass('active-toc');
                $('#toc-brand-guidelines').removeClass('active-toc');
              }
              if(scroll < osBasicTouchpoints + htBasicTouchpoints ) {
                $('#toc-basic-touchpoints').removeClass('active-toc');
              }

              var osSocialMedia = $('#social-media').offset().top;
              var htSocialMedia = $('#social-media').height();
              if(scroll > osSocialMedia + htSocialMedia ){
                $('#toc-social-media').addClass('active-toc');
                $('#toc-basic-touchpoints').removeClass('active-toc');
              }
              if(scroll < osSocialMedia + htSocialMedia ) {
                $('#toc-social-media').removeClass('active-toc');
              }

              var osParkingPage = $('#parking-page').offset().top;
              var htParkingPage = $('#parking-page').height();
              if(scroll > osParkingPage + htParkingPage ){
                $('#toc-parking-page').addClass('active-toc');
                $('#toc-social-media').removeClass('active-toc');
              }
              if(scroll < osParkingPage + htParkingPage ) {
                $('#toc-parking-page').removeClass('active-toc');
              }

              var osEmailSignature = $('#email-signature').offset().top;
              var htEmailSignature = $('#email-signature').height();
              if(scroll > osEmailSignature + htEmailSignature ){
                $('#toc-email-signature').addClass('active-toc');
                $('#toc-parking-page').removeClass('active-toc');
              }
              if(scroll < osEmailSignature + htEmailSignature ) {
                $('#toc-email-signature').removeClass('active-toc');
              }

              var osBusinessCards = $('#business-cards').offset().top;
              var htBusinessCards = $('#business-cards').height();
              if(scroll > osBusinessCards + htBusinessCards ){
                $('#toc-business-cards').addClass('active-toc');
                $('#toc-email-signature').removeClass('active-toc');
              }
              if(scroll < osBusinessCards + htBusinessCards ) {
                $('#toc-business-cards').removeClass('active-toc');
              }

              var osLetterhead = $('#letterhead').offset().top;
              var htLetterhead = $('#letterhead').height();
              if(scroll > osLetterhead + htLetterhead ){
                $('#toc-letterhead').addClass('active-toc');
                $('#toc-business-cards').removeClass('active-toc');
              }
              if(scroll < osLetterhead + htLetterhead ) {
                $('#toc-letterhead').removeClass('active-toc');
              }

              var osPresentationSlides = $('#presentation-slides').offset().top;
              var htPresentationSlides = $('#presentation-slides').height();
              if(scroll > osPresentationSlides + htPresentationSlides ){
                $('#toc-presentation-slides').addClass('active-toc');
                $('#toc-letterhead').removeClass('active-toc');
              }
              if(scroll < osPresentationSlides + htPresentationSlides ) {
                $('#toc-presentation-slides').removeClass('active-toc');
              }

              var osDigitalProductDevelopment = $('#digital-product-development').offset().top;
              var htDigitalProductDevelopment = $('#digital-product-development').height();
              if(scroll > osDigitalProductDevelopment + htDigitalProductDevelopment ){
                $('#toc-digital-product-development').addClass('active-toc');
                $('#toc-presentation-slides').removeClass('active-toc');
              }
              if(scroll < osDigitalProductDevelopment + htDigitalProductDevelopment ) {
                $('#toc-digital-product-development').removeClass('active-toc');
              }

              var osUserStories = $('#user-stories').offset().top;
              var htUserStories = $('#user-stories').height();
              if(scroll > osUserStories + htUserStories ){
                $('#toc-user-stories').addClass('active-toc');
                $('#toc-digital-product-development').removeClass('active-toc');
              }
              if(scroll < osUserStories + htUserStories ) {
                $('#toc-user-stories').removeClass('active-toc');
              }

              var osUserJourney = $('#user-journey').offset().top;
              var htUserJourney = $('#user-journey').height();
              if(scroll > osUserJourney + htUserJourney ){
                $('#toc-user-journey').addClass('active-toc');
                $('#toc-user-stories').removeClass('active-toc');
              }
              if(scroll < osUserJourney + htUserJourney ) {
                $('#toc-user-journey').removeClass('active-toc');
              }

              var osUserFlow = $('#user-flow').offset().top;
              var htUserFlow = $('#user-flow').height();
              if(scroll > osUserFlow + htUserFlow ){
                $('#toc-user-flow').addClass('active-toc');
                $('#toc-user-journey').removeClass('active-toc');
              }
              if(scroll < osUserFlow + htUserFlow ) {
                $('#toc-user-flow').removeClass('active-toc');
              }

              var osInformationArchitecture = $('#information-architecture').offset().top;
              var htInformationArchitecture = $('#information-architecture').height();
              if(scroll > osInformationArchitecture + htInformationArchitecture ){
                $('#toc-information-architecture').addClass('active-toc');
                $('#toc-user-flow').removeClass('active-toc');
              }
              if(scroll < osInformationArchitecture + htInformationArchitecture ) {
                $('#toc-information-architecture').removeClass('active-toc');
              }

              var osContentCreation = $('#content-creation').offset().top;
              var htContentCreation = $('#content-creation').height();
              if(scroll > osContentCreation + htContentCreation ){
                $('#toc-content-creation').addClass('active-toc');
                $('#toc-information-architecture').removeClass('active-toc');
              }
              if(scroll < osContentCreation + htContentCreation ) {
                $('#toc-content-creation').removeClass('active-toc');
              }

              var osWireframing = $('#wireframing').offset().top;
              var htWireframing = $('#wireframing').height();
              if(scroll > osWireframing + htWireframing ){
                $('#toc-wireframing').addClass('active-toc');
                $('#toc-content-creation').removeClass('active-toc');
              }
              if(scroll < osWireframing + htWireframing ) {
                $('#toc-wireframing').removeClass('active-toc');
              }

              var osDesignComps = $('#design-comps').offset().top;
              var htDesignComps = $('#design-comps').height();
              if(scroll > osDesignComps + htDesignComps ){
                $('#toc-design-comps').addClass('active-toc');
                $('#toc-wireframing').removeClass('active-toc');
              }
              if(scroll < osDesignComps + htDesignComps ) {
                $('#toc-design-comps').removeClass('active-toc');
              }

              var osPrototyping = $('#prototyping').offset().top;
              var htPrototyping = $('#prototyping').height();
              if(scroll > osPrototyping + htPrototyping ){
                $('#toc-prototyping').addClass('active-toc');
                $('#toc-design-comps').removeClass('active-toc');
              }
              if(scroll < osPrototyping + htPrototyping ) {
                $('#toc-prototyping').removeClass('active-toc');
              }

              var osTesting = $('#testing').offset().top;
              var htTesting = $('#testing').height();
              if(scroll > osTesting + htTesting ){
                $('#toc-testing').addClass('active-toc');
                $('#toc-prototyping').removeClass('active-toc');
              }
              if(scroll < osTesting + htTesting ) {
                $('#toc-testing').removeClass('active-toc');
              }

              var osProgramming = $('#programming').offset().top;
              var htProgramming = $('#programming').height();
              if(scroll > osProgramming + htProgramming ){
                $('#toc-programming').addClass('active-toc');
                $('#toc-testing').removeClass('active-toc');
              }
              if(scroll < osProgramming + htProgramming ) {
                $('#toc-programming').removeClass('active-toc');
              }

              var osBibliography = $('#bibliography').offset().top;
              var htBibliography = $('#bibliography').height();
              if(scroll > osBibliography + htBibliography ){
                $('#toc-bibliography').addClass('active-toc');
                $('#toc-programming').removeClass('active-toc');
              }
              if(scroll < osBibliography + htBibliography ) {
                $('#toc-bibliography').removeClass('active-toc');
              }

              var osBooks = $('#books').offset().top;
              var htBooks = $('#books').height();
              if(scroll > osBooks + htBooks ){
                $('#toc-books').addClass('active-toc');
                $('#toc-bibliography').removeClass('active-toc');
              }
              if(scroll < osBooks + htBooks ) {
                $('#toc-books').removeClass('active-toc');
              }

              var osBlogsAndSources = $('#blogs-and-sources').offset().top;
              var htBlogsAndSources = $('#blogs-and-sources').height();
              if(scroll > osBlogsAndSources + htBlogsAndSources ){
                $('#toc-blogs-and-sources').addClass('active-toc');
                $('#toc-books').removeClass('active-toc');
              }
              if(scroll < osBlogsAndSources + htBlogsAndSources ) {
                $('#toc-blogs-and-sources').removeClass('active-toc');
              }

              var osToolsAndResources = $('#tools-and-resources').offset().top;
              var htToolsAndResources = $('#tools-and-resources').height();
              if(scroll > osToolsAndResources + htToolsAndResources ){
                $('#toc-tools-and-resources').addClass('active-toc');
                $('#toc-blogs-and-sources').removeClass('active-toc');
              }
              if(scroll < osToolsAndResources + htToolsAndResources ) {
                $('#toc-tools-and-resources').removeClass('active-toc');
              }

              var osPolyForum = $('#poly-forum').offset().top;
              var htPolyForum = $('#poly-forum').height();
              if(scroll > osPolyForum + htPolyForum ){
                $('#toc-poly-forum').addClass('active-toc');
                $('#toc-tools-and-resources').removeClass('active-toc');
              }
              if(scroll < osPolyForum + htPolyForum ) {
                $('#toc-poly-forum').removeClass('active-toc');
              }

              var osX = $('#').offset().top;
              var htX = $('#').height();
              if(scroll > osX + htX ){
                $('#toc-').addClass('active-toc');
              }
              if(scroll < osX + htX ) {
                $('#toc-').removeClass('active-toc');
              }

          });
        </script>
    <!-- BREADCRUMBS SCRIPT end -->


</head>
