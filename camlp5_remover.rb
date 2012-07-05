#!/usr/bin/env ruby
file = File.open("atp_interactive.ml", "rb")
contents = file.read

newcontents = contents.gsub(/<<(.*?)>>/) do |s|
  s=s.gsub(/\\/,'\&\&')
  s=s.gsub( '<<|', "secondary_parser \"" );
  s=s.gsub( '<<', "default_parser \"" );
  s=s.gsub( '>>', "\"" ) 
end

File.open("atp_interactive_not_camlp5.ml", "w+") do |f|
  f.write(newcontents)
end


cat
