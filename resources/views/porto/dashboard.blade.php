@extends('porto.main')

@section('content')
    <div class="custom-home">
    <div class="intro-section">
        <div class="intro-content">
          <div class="job-title">Software Engineer</div>
          <div class="full-name">Alamsyah Aldefa</div>
          <div class="intro-description">
            A passionate individual with an insatiable curiosity for new experiences and a commitment to continuous learning. Enthusiastically exploring the realms of web development and design to broaden expertise.
          </div>
        </div>
        <div class="social-media-section">
          <img class="wa-icon" alt="" src="{{asset('Image/WA.svg')}}" />
          <img class="instagram-icon" alt="" src="{{asset('Image/Instagram.svg')}}" />
          <img class="linkedln-icon" alt="" src="{{asset('Image/Linkdln.svg')}}" />
          <div class="find-me-label">
            <div class="find-me-divider"></div>
            <div class="find-me-title">Find Me On</div>
          </div>
        </div>
      </div>
      <div class="educational-background">
        <div class="study-info">
        <div class="educational-history-divider"></div>
        <div class="edu-history-label">Educational History</div>
          <div class="study-description">
            Embarked on my academic journey at Universitas Gadjah Mada, specializing in Software Engineering within the Faculty of Vocational School, with aspirations of graduating punctually.
          </div>
          <div class="university-info">
            <div class="university-name">University of Gadjah Mada</div>
            <div class="study-duration">2022-now</div>
          </div>
        </div>
      </div>
      <div class="tools-and-skills-section">
        <img class="tools-and-skills-img" alt="" src="{{asset('Image/ToolsSkills.svg')}}" />
        <div class="tools-and-skills-label">Tools and Skills</div>
      </div>

      <div class="contact-info">
        <div class="email-section">
          <div class="email-container">
            <div class="email-address">
              alamsyahaldefa@gmail.com
            </div>
            <div class="email-label">Email</div>
          </div>
          <img class="email-icon" alt="" src="{{asset('Image/email1.svg')}}" />
        </div>
        <div class="phone-section">
          <div class="phone-container">
            <div class="phone-label">Phone</div>
            <div class="phone-number">082134267683</div>
          </div>
          <img class="phone-icon" alt="" src="{{asset('Image/Phone1.svg')}}" />
        </div>
      </div>
    </div>
@endsection
