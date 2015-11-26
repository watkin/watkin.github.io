---
layout: post
title:  "UnityException: Launching iOS project via Xcode4 failed. Check editor log for details"
date:   2015-11-25 17:05:32
categories: bug
comments: true
---
解决：


1.打开unity对应以下路径
/Applications/Unity/Unity.app/Contents/PlaybackEngines/iOSSupport/Tools/OSX/Unity4XC.xcplugin/Contents/Info.plist

2.用文本打开Info.plist 
找到
<key>DVTPlugInCompatibilityUUIDs</key>
<array>
<string>63FC1C47-140D-42B0-BB4D-A10B2D225574</string>
<string>37B30044-3B14-46BA-ABAA-F01000C27B63</string>
</array>

3.插入下面的代码
<string>A2E4D43F-41F4-4FB9-BB94-7177011C9AED</string>