<header id="header" class="light-theme">

  <a title="Version" id="version-button-inactive" class="version-button inactive-header-button" onclick="

    document.getElementById('version-banner').className='';
    document.getElementById('version-button-inactive').className='d-none';
    document.getElementById('version-button-active').className='version-button active-header-button';

    document.getElementById('about-banner').className='d-none';
    document.getElementById('about-button-active').className='d-none';
    document.getElementById('about-button-inactive').className='about-button inactive-header-button';

    document.getElementById('poly-forum-banner').className='d-none';
    document.getElementById('community-button-active').className='d-none';
    document.getElementById('community-button-inactive').className='community-button inactive-header-button';

    ">1 Mar 2023</a>

  <a title="Version" id="version-button-active" class="d-none"  onclick="document.getElementById('version-banner').className='d-none';document.getElementById('version-button-active').className='d-none';document.getElementById('version-button-inactive').className='version-button inactive-header-button';">1 Mar 2023</a>

  <a title="Change Theme" id="change-to-dark" class="change-theme-button" onclick="document.body.className='dark-theme';document.getElementById('change-to-dark').className='change-theme-button d-none';document.getElementById('change-to-light').className='change-theme-button';document.getElementById('header').className='dark-theme';"><i class="fa-solid fa-lightbulb"></i></a>

  <a title="Change Theme" id="change-to-light" class="change-theme-button d-none" onclick="document.body.className='light-theme';document.getElementById('change-to-light').className='change-theme-button d-none';document.getElementById('change-to-dark').className='change-theme-button';document.getElementById('header').className='light-theme';"><i class="fa-solid fa-lightbulb"></i></a>

</header>