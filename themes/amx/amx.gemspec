# frozen_string_literal: true

Gem::Specification.new do |spec|
  spec.name          = "amx"
  spec.version       = "0.1.0"
  spec.authors       = ["Axel Valdez"]
  spec.email         = ["axel@paskola.com"]

  spec.summary       = "amx theme"
  spec.homepage      = "https://axel.mx"
  spec.license       = "Copytight"

  spec.files         = `git ls-files -z`.split("\x0").select { |f| f.match(%r!^(assets|_layouts|_includes|_sass|LICENSE|README|_config\.yml)!i) }

  spec.add_runtime_dependency "jekyll", "~> 4.2"
end
