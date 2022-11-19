<header>

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

    ">19 Nov 2022</a>

  <a title="Version" id="version-button-active" class="d-none"  onclick="document.getElementById('version-banner').className='d-none';document.getElementById('version-button-active').className='d-none';document.getElementById('version-button-inactive').className='version-button inactive-header-button';">19 Nov 2022</a>

  <a title="Change Theme" id="change-to-dark" class="change-theme-button" onclick="document.getElementById('web-body').className='dark-theme';"><i class="fa-solid fa-lightbulb"></i></a>

  <a title="Change Theme" id="change-to-light" class="change-theme-button" onclick="document.getElementById('web-body').className='light-theme';"><i class="fa-solid fa-lightbulb"></i></a>

  <a href="javascript:void(0)" onclick="javascript:toggleFullScreen()" class="fullscreen-button" title="Fullscreen"><i class="fas fa-expand-arrows-alt"></i></a>

</header>