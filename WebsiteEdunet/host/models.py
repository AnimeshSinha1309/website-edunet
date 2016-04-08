from django.db import models

# Create your models here.

class Institution(models.Model):
    INSTITUTION_TYPES = (
        ('school', 'School'),
        ('university', 'University'),
        ('smallbusiness', 'Small Business'),
        ('largebusiness', 'Large Business'),
        ('studentteam', 'Students Team'),
        ('studentteam', 'Students Team'),
        ('researchinstitute', 'Research Institute'),
        ('enterprenureship', 'Enterprenureship'),
    )
    name = models.CharField(max_length = 100)
    type = models.CharField(max_length = 50, choices = INSTITUTION_TYPES)


class User(models.Model):
    username = models.CharField(max_length = 50)
    firstname = models.CharField(max_length = 50)
    lastname = models.CharField(max_length = 50)
    profilepic = models.ImageField(upload_to = 'host/profilepics')
    email = models.EmailField()
    instituition = models.ForeignKey(Institution)