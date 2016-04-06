from django.conf.urls import url
from . import views

urlpatterns = [
    url(r'^$', views.SchoolList.as_view(), name='schools_list'),
    url(r'list/^$', views.SchoolList.as_view(), name='schools_list'),
]