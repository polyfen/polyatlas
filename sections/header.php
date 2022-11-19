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

    ">0.1</a>

  <a title="Version" id="version-button-active" class="d-none"  onclick="document.getElementById('version-banner').className='d-none';document.getElementById('version-button-active').className='d-none';document.getElementById('version-button-inactive').className='version-button inactive-header-button';">0.1</a>

  <a title="Info" id="about-button-inactive" class="about-button inactive-header-button" onclick="

    document.getElementById('about-banner').className='';
    document.getElementById('about-button-inactive').className='d-none';
    document.getElementById('about-button-active').className='about-button active-header-button';

    document.getElementById('version-banner').className='d-none';
    document.getElementById('version-button-active').className='d-none';
    document.getElementById('version-button-inactive').className='version-button inactive-header-button';

    document.getElementById('poly-forum-banner').className='d-none';
    document.getElementById('community-button-active').className='d-none';
    document.getElementById('community-button-inactive').className='community-button inactive-header-button';

  "><i class="fas fa-info"></i></a>

  <a title="Info" id="about-button-active" class="d-none"  onclick="document.getElementById('about-banner').className='d-none';document.getElementById('about-button-active').className='d-none';document.getElementById('about-button-inactive').className='about-button inactive-header-button';"><i class="fas fa-info"></i></a>

  <a title="Community" id="community-button-inactive" class="community-button inactive-header-button" onclick="

    document.getElementById('poly-forum-banner').className='';
    document.getElementById('community-button-inactive').className='d-none';
    document.getElementById('community-button-active').className='community-button active-header-button';

    document.getElementById('about-banner').className='d-none';
    document.getElementById('about-button-active').className='d-none';
    document.getElementById('about-button-inactive').className='about-button inactive-header-button';

    document.getElementById('version-banner').className='d-none';
    document.getElementById('version-button-active').className='d-none';
    document.getElementById('version-button-inactive').className='version-button inactive-header-button';

    "><i class="fas fa-comment"></i></a>

  <a title="Community" id="community-button-active" class="d-none" onclick="document.getElementById('poly-forum-banner').className='d-none';document.getElementById('community-button-active').className='d-none';document.getElementById('community-button-inactive').className='community-button inactive-header-button';"><i class="fas fa-comment"></i></a>

  <a href="javascript:void(0)" onclick="javascript:toggleFullScreen()" class="fullscreen-button" title="Fullscreen"><i class="fas fa-expand-arrows-alt"></i></a>

</header>
