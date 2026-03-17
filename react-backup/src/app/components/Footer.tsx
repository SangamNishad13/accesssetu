import { Link } from "react-router";
import { Mail, Phone, MapPin, Clock } from "lucide-react";
import { Logo } from "./Logo";

export function Footer() {
  return (
    <footer className="bg-gray-900 text-gray-300">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
          {/* Company Info */}
          <div>
            <div className="mb-4 [&_span]:text-white [&_svg_circle]:fill-white [&_svg_path]:stroke-gray-900 [&_svg_line]:stroke-gray-900">
              <Logo />
            </div>
            <p className="text-sm">
              Making the digital world accessible to everyone through expert
              testing, consultation, and remediation services.
            </p>
          </div>

          {/* Quick Links */}
          <div>
            <h3 className="text-white font-semibold mb-4">Quick Links</h3>
            <ul className="space-y-2 text-sm">
              <li>
                <Link to="/services" className="hover:text-blue-400 transition-colors">
                  Services
                </Link>
              </li>
              <li>
                <Link to="/about" className="hover:text-blue-400 transition-colors">
                  About Us
                </Link>
              </li>
              <li>
                <Link to="/contact" className="hover:text-blue-400 transition-colors">
                  Contact
                </Link>
              </li>
            </ul>
          </div>

          {/* Services */}
          <div>
            <h3 className="text-white font-semibold mb-4">Services</h3>
            <ul className="space-y-2 text-sm">
              <li>Accessibility Testing</li>
              <li>WCAG Compliance Audit</li>
              <li>Remediation Services</li>
              <li>Training & Consultation</li>
            </ul>
          </div>

          {/* Contact */}
          <div>
            <h3 className="text-white font-semibold mb-4">Contact Us</h3>
            <ul className="space-y-3 text-sm">
              <li className="flex items-center gap-2">
                <Mail size={16} />
                <a href="mailto:hello@accesssetu.com" className="hover:text-blue-400 transition-colors">
                  hello@accesssetu.com
                </a>
              </li>
              {/* <li className="flex items-center gap-2">
                <Phone size={16} />
                <a href="tel:+15551234567" className="hover:text-blue-400 transition-colors">
                  (555) 123-4567
                </a>
              </li> */}
              <li className="flex items-center gap-2">
                <Clock size={16} />
                <span><strong>Business Hours:</strong> <br/>Monday - Friday, 9:00 AM - 6:00 PM IST</span>
              </li>
            </ul>
          </div>
        </div>

        <div className="border-t border-gray-800 mt-8 pt-8 text-sm text-center">
          <p>&copy; {new Date().getFullYear()} Access Setu Technologies. All rights reserved.</p>
        </div>
      </div>
    </footer>
  );
}