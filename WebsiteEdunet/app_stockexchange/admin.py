from django.contrib import admin
from app_stockexchange.models import *

# Register your models here.
admin.site.register(User)
admin.site.register(Stocks)
admin.site.register(Symbols)
admin.site.register(History)