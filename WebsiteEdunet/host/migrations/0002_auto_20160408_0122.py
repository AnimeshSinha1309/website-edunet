# -*- coding: utf-8 -*-
# Generated by Django 1.9.4 on 2016-04-07 19:52
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('host', '0001_initial'),
    ]

    operations = [
        migrations.RenameModel(
            old_name='Institutions',
            new_name='Institution',
        ),
    ]
