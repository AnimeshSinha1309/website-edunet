from django.db import models
import host.models

# Create your models here.
class User(models.Model):
    user = models.ForeignKey(host.models.User)
    cash = models.IntegerField()

class Symbols(models.Model):
    symbol = models.CharField(max_length = 20)

class Stocks(models.Model):
    user = models.ForeignKey(User)
    stock = models.ForeignKey(Symbols)

class History(models.Model):
    TRANSACTION_TYPES = (
        ('B', 'Buy'),
        ('S', 'Sell'),
    )
    user = models.ForeignKey(User)
    stock = models.ForeignKey(Stocks)
    number = models.IntegerField()
    price = models.IntegerField()
    type = models.CharField(max_length = 1, choices = TRANSACTION_TYPES)
    time = models.TimeField(auto_now = True)