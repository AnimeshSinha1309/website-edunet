from django.conf.urls import url
from . import views
from django.conf.urls.static import static
from django.conf import settings

urlpatterns = [
    url(r'^$', views.SchoolList.as_view(), name='schools_list'),
    url(r'list/^$', views.SchoolList.as_view(), name='schools_list'),
]