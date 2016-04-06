from django.db import models

# Create your models here.
class School(models.Model):
    username = models.CharField(max_length = 50)
    name = models.CharField(max_length = 50)
    description = models.TextField(max_length = 1000)
    # To add a picture attribute later
    def __str__(self):
        return self.name

class Student(models.Model):
    school = models.ForeignKey(School)
    name = models.CharField(max_length = 50)
    username = models.CharField(max_length = 50)
    description = models.TextField(max_length = 1000)
    def __str__(self):
        return self.name
