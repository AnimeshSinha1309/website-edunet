from django.conf.urls import url
from . import views
from django.conf.urls.static import static
from django.conf import settings

urlpatterns = [
    url(r'^$', views.SchoolList.as_view(), name='schools'),
    # Username: stthomas
    url(r'^stthomas/$', views.stthomas_home, name='schools/stthomas/home'),
    url(r'^stthomas/announcements$', views.stthomas_announcements, name='schools/stthomas/announcements'),
    url(r'^stthomas/gallery$', views.stthomas_gallery, name='schools/stthomas/gallery'),
    url(r'^stthomas/management$', views.stthomas_managemant, name='schools/stthomas/management'),
    url(r'^stthomas/about$', views.stthomas_about, name='schools/stthomas/about'),
    url(r'^stthomas/results$', views.stthomas_results, name='schools/stthomas/results'),    
    # Username: stxaivers
    url(r'^stxaviers/$', views.stxaviers_home, name='schools/stxaviers/home'),
    # Username: jvmshyamli
    url(r'^jvmshyamali/$', views.jvmshyamali_home, name='schools/jvmshyamali/home'),
]