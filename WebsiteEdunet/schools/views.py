from django.shortcuts import render
from django.http import HttpRequest
from django.template import RequestContext
from datetime import datetime
from django.views.generic import *
from schools.models import School

# Create your views here.
class SchoolList(ListView):
    model = School