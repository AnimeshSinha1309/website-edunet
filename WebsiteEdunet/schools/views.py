from django.shortcuts import render, redirect
from django.http import HttpRequest
from schools.models import School
from django.views.generic import *

# Create your views here.
class SchoolList(ListView):
    model = School

def stthomas_home(request):
    return render(request, 'stthomas/home.html')
def stthomas_about(request):
    return render(request, 'stthomas/about.html')
def stthomas_announcements(request):
    return render(request, 'stthomas/announcements.html')
def stthomas_gallery(request):
    return render(request, 'stthomas/gallery.html')
def stthomas_managemant(request):
    return render(request, 'stthomas/management.html')
def stthomas_results(request):
    return render(request, 'stthomas/results.html')

def stxaviers_home(request):
    return redirect('http://www.stxaviersschool.com')

def jvmshyamali_home(request):
    return redirect('http://www.jvmshyamali.com')