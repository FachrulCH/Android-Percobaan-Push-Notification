require 'rubygems'
require 'pushmeup'
GCM.host = 'https://android.googleapis.com/gcm/send'
GCM.format = :json
GCM.key = "cool-drive-95502"
destination = ["APA91bEpmCs6FqwtfMTkQ10sfWIL4XZ-5AWgKEzJKVBhSPEcydKyXh4kK_3LBWeA5MamLTmTBL8WEqoXXbJ3KBpexbtrO97Wh0wm2NfX1_y4KNvV7wSooV9cug1szhqMZJ3emFv9lMCh"]
data = {:message => "PhoneGap Build rocks!", :msgcnt => "1", :soundname => "beep.wav"}

GCM.send_notification( destination, data)
